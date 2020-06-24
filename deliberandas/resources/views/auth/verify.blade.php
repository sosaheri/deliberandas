@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="ver card">
                <div class="card-header">{{ __('Verifique su correo antes de ingresar') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo mensaje ha sido enviado a su email.') }}
                        </div>
                    @endif

                    {{ __('Por favor revise su bandeja de entrada / spam de su correo para obtener un enlace de verificación y presione el botón para activar su cuenta.') }}
                    {{ __('Si no recibiste el email o no le permite el acceso') }}, 
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('presione aqui para recibir otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
