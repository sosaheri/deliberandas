@extends('layouts.app', [
    'namePage' => '',
    'activePage' => 'register',
    'backgroundImage' => asset('assets') . "/img/bg16.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="info-area info-horizontal mt-5">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-2_sound-wave"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Marketing') }}</h5>
              <p class="description">
                {{ __("We've created the marketing campaign of the website. It was a very interesting collaboration.") }}
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-1_button-pause"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Fully Coded in HTML5') }}</h5>
              <p class="description">
                {{ __("We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.") }}
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-info">
              <i class="now-ui-icons users_single-02"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Built Audience') }}</h5>
              <p class="description">
                {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mr-auto">
          <div class="card card-signup text-center">
            <div class="card-header ">
              <h4 class="card-title">{{ __('Crea tu cuenta') }}</h4>
            
            </div>
            <div class="card-body ">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                 <!--begin input id-->
                <!-- <div class="input-group {{ $errors->has('cid') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input id="cid" class="form-control {{ $errors->has('cid') ? ' is-invalid' : '' }}" placeholder="{{ __('Documento de identidad') }}" type="text" name="cid" value="{{ old('cid') }}" required autofocus>
                  @if ($errors->has('cid'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('cid') }}</strong>
                    </span>
                  @endif
                </div> -->
                <!--Begin input name -->
                <!-- <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div> -->
                <!--Begin input surname -->
                <!-- <div class="input-group {{ $errors->has('surname') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input id="surname" class="form-control {{ $errors->has('surname') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido') }}" type="text" name="surname" value="{{ old('surname') }}" required autofocus>
                  @if ($errors->has('surname'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                  @endif
                </div> -->
                <!--Begin input email -->
                <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </div>
                  </div>
                  <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                 </div>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif                               
                <!--Begin input password -->
                <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </div>
                  </div>
                  <input id="pass" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                 <!--begin input type-->
                 <div class="input-group {{ $errors->has('type') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  
                   <select name="type" class="form-control" >
                      <option >Tipo de usuario</option>
                      <option value="2">Repartidor</option>
                      <option value="3">Empresa</option>
                  </select>

                  
                 
                  @if ($errors->has('type'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('type') }}</strong>
                    </span>
                  @endif
                </div>                
                <!--begin input check-->
                <div class="form-check text-left {{ $errors->has('check') ? ' has-danger' : '' }}">
                  <label class="form-check-label">
                    <input required class="form-check-input" name="check" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    {{ __('Estoy de acuerdo con') }}
                    <a href="#something">{{ __('los terminos y condiciones') }}</a>.
                  </label>
                </div>
                 @if ($errors->has('check'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('check') }}</strong>
                    </span>
                  @endif
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Registrar')}}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
<script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

        });
    </script>
@endpush
