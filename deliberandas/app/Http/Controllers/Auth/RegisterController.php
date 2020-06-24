<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct(){
        $this->middleware('guest');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password' => ['required'],
        ]);
    }

    protected function create(array $data){

       // dd($data);

        return User::create([
            'cid' => rand(),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['type'],
            'fullProfile' => false
        ]);

       // $client = new GuzzleHttp\Client(['base_uri' => 'https://myapp.com/api/']);

       // $data['cid']
      //   https://cuado.co:444/api/v1?app_id=424&token=930b7842d5411b1de445c3e3fbb89ad4&cedula=16473740
        
        // api validacion de correos
    //     $client = new Client([
    //         'base_uri' => 'https://cuado.co:444/api/v1',
    //         'timeout'  => 2.0,
    //     ]);

    //    $url = 'https://cuado.co:444/api/v1' . '?app_id=' .env('CEDULA_APP_ID') . '&token=' . env('CEDULA_KEY') . '&cedula='. $data['cid'];
                

    //    $response = $client->request('GET', $url , ['verify' => false]);
    //    $temp = json_decode($response->getBody()->getContents());
      


    //     if ( !$temp->error ){
      

    //         return User::create([
    //             'name' => $temp->data->primer_nombre . ' ' . $temp->data->segundo_nombre,
    //             'surname' => $temp->data->primer_apellido . ' ' . $temp->data->segundo_apellido,
    //             'cid' => $data['cid'],
    //             'email' => $data['email'],
    //             'password' => Hash::make($data['password']),
    //             'role' => $data['type'],
    //             'fullProfile' => false
    //         ]);

    //     }else{

    //         return User::create([
    //             //'cid' => $data['cid'],
    //             'email' => $data['email'],
    //             'password' => Hash::make($data['password']),
    //             'role' => $data['type'],
    //             'fullProfile' => false
    //         ]);

    //     }


    }

    public function register(Request $request)
    {
    $this->validator($request->all())->validate();

    event(new Registered($user = $this->create($request->all())));

      $this->guard()->login($user);

    // return $this->registered($request, $user)
    //                 ?: redirect($this->redirectPath());

    Session::flash('success', 'Para culminar tu registro, verifica tu cuenta de correo' );
    return Redirect::to('/login');
    }


}
