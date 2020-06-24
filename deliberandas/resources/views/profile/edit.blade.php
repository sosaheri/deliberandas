@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'User Profile',
    'activePage' => 'profile',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Editar perfil")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success')
              <div class="row">
              </div>

              @if( Auth::user()->role == 2)

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__(" Nombres")}}</label>
                                    <input required type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                                    @include('alerts.feedback', ['field' => 'name'])
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__(" Apellidos")}}</label>
                                    <input required type="text" name="surname" class="form-control" value="{{ old('surname', auth()->user()->surname) }}">
                                    @include('alerts.feedback', ['field' => 'surname'])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label>{{__(" Documento de identidad")}}</label>
                                      <input required type="text" name="cid" class="form-control" value="{{ old('cid', auth()->user()->cid) }}">
                                      @include('alerts.feedback', ['field' => 'cid'])
                              </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">{{__(" Email")}}</label>
                          <input required type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                          @include('alerts.feedback', ['field' => 'email'])
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__(" Número de Teléfono celular")}}</label>
                                <input required type="tel" pattern="0?4(12|14|16|24|26)[0-9]{7}" placeholder="Ejemplo 04121234567" name="phone" class="form-control" value="{{ old('phone', auth()->user()->phone) }}">
                                    @include('alerts.feedback', ['field' => 'phone'])
                                    
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__("Edad")}}</label>
                                    <input required type="text" name="age" class="form-control" value="{{ old('name', auth()->user()->age) }}">
                                    @include('alerts.feedback', ['field' => 'age'])
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__("Ciudad")}}</label>
                                    <input required type="text" name="city" class="form-control" value="{{ old('city', auth()->user()->city) }}">
                                    @include('alerts.feedback', ['field' => 'city'])
                            </div>
                        </div>
                    </div> 

              @elseif(Auth::user()->role == 3 )

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__(" Nombres")}}</label>
                                    <input required type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                                    @include('alerts.feedback', ['field' => 'name'])
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__(" Apellidos")}}</label>
                                    <input required type="text" name="surname" class="form-control" value="{{ old('surname', auth()->user()->surname) }}">
                                    @include('alerts.feedback', ['field' => 'surname'])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                              <div class="form-group">
                                  <label>{{__(" Documento de identidad")}}</label>
                                      <input required type="text" name="cid" class="form-control" value="{{ old('cid', auth()->user()->cid) }}">
                                      @include('alerts.feedback', ['field' => 'cid'])
                              </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">{{__(" Email")}}</label>
                          <input required type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                          @include('alerts.feedback', ['field' => 'email'])
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__(" Número de Teléfono celular")}}</label>
                                <input required type="tel" pattern="0?4(12|14|16|24|26)[0-9]{7}" placeholder="Ejemplo 04121234567" name="phone" class="form-control" value="{{ old('phone', auth()->user()->phone) }}">
                                    @include('alerts.feedback', ['field' => 'phone'])
                                    
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__("Tipo de empresa")}}</label>
                                    <input required type="text" name="type" class="form-control" value="{{ old('type', auth()->user()->type) }}">
                                    @include('alerts.feedback', ['field' => 'type'])
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__("Cargo en empresa")}}</label>
                                    <input required type="text" name="charge" class="form-control" value="{{ old('charge', auth()->user()->charge) }}">
                                    @include('alerts.feedback', ['field' => 'charge'])
                            </div>
                        </div>
                    </div> 
              
              @endif
               


              <div class="card-footer ">
              <input type="hidden" name="fullProfile" value="{{ true }}">
                                    
                <button type="submit" class="btn btn-primary btn-round">{{__('Guardar Datos')}}</button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>


          <div class="card-header">
            <h5 class="title">{{__("¿Quieres cambiar tu clave de acceso?")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
              @csrf
              @method('put')
              @include('alerts.success', ['key' => 'password_status'])
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Clave actual")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="old_password" placeholder="{{ __('Clave actual') }}" type="password"  required>
                    @include('alerts.feedback', ['field' => 'old_password'])
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label>{{__(" Nueva clave")}}</label>
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva clave') }}" type="password" name="password" required>
                    @include('alerts.feedback', ['field' => 'password'])
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-7 pr-1">
                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label>{{__(" Confirma la nueva clave")}}</label>
                  <input class="form-control" placeholder="{{ __('Confirma la nueva clave') }}" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round ">{{__('Cambiar clave')}}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                <h5 class="title">{{ auth()->user()->name }}</h5>
              </a>
              <p class="description">
                  {{ auth()->user()->email }}
              </p>
            </div>
          </div>
          <hr>
          <!-- <div class="button-container">
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-facebook-square"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-google-plus-square"></i>
            </button>
          </div> -->
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bienvenido a Deliberandas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor completa tus datos, para que empieces a utilizar el sistema.</p>
      </div>
      
    </div>
  </div>
</div>

@endsection

@if( Auth::user()->fullProfile == 0 )

    @push('js')
    <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').modal('show');
    });
</script>
    @endpush

@endif