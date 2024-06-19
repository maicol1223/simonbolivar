@extends('layouts.appregister')

@section('title', 'Register')

@section('content')

<div class="register-box">
    <div class="card card-outline card-danger border-warning">
        <div class="card-header text-center text-light border-success bg-success">
            <!-- Agregamos la imagen -->
            <img src="{{ asset('/img/logo.jpg') }}" alt="Imagen de inicio de sesión" class="img-fluid mx-auto d-block rounded" style="max-width: 200px;">
            <h1>Drogueria <span>Simon bolivar</span></h1>
        </div>
        <div class="card-body bg-info">
            <p class="login-box-msg text-bold text-light">REGISTRARSE</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-bold text-light text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border border-warning" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-bold text-light text-md-end">{{ __('Email') }}</label>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border border-warning" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-bold text-light text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror border border-warning" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="password-confirm" class="col-md-4 col-form-label text-bold text-light text-md-end">{{ __('Confirm Password') }}</label>
                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control border border-warning" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-warning btn-block text-center">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


