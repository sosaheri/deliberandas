<?php

namespace App\Http\Controllers;

use Gate;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

class ProfileController extends Controller
{

    public function edit(){
        return view('profile.edit');
    }

    public function update(ProfileRequest $request){
        auth()->user()->update($request->all());
        

        return back()->withStatus(__('Perfil Actualizado.'));
    }

    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Contraseña actualizada.'));
    }
}
