<<<<<<< HEAD
@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
<link href="{{ asset('css/iniciarsesio.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(4, 79, 7, 0.412)">{{ __('Iniciar Sesion') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div style="text-align: center" class="logo">
                                    <img src="assets/logo.ico" alt="">
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>

                                    <div class="col-md-6">
                                        <select id="role" class="form-control" name="role" required>
                                            <option value="aprendiz">Aprendiz</option>
                                            <option value="profesor">Docente</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <label for="email"class="col-md-4 col-form-label text-md-end">{{ __('Direccion Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6" ">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" style="background-color: rgba(11, 151, 227, 0.473)">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar Sesion') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Sesión Aprendiz</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Datos Inicio De Sesión</h1>
        </div>
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
    
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
    
        <div class="form-group">
            <label for="rol">Selecciona un Rol:</label><br>
            <input type="radio" id="rol_admin" name="rol" value="admin" required>
            <label for="rol_admin">Admin</label><br>
            <input type="radio" id="rol_profesor" name="rol" value="profesor">
            <label for="rol_profesor">Profesor</label><br>
            <input type="radio" id="rol_aprendiz" name="rol" value="aprendiz">
            <label for="rol_aprendiz">Aprendiz</label><br>
        </div>
        <div class="form-group">
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
    <div class="footer">
        © 2023 EmpleaMusic
    </div>
</div>
</body>
</html>
>>>>>>> origin/esteban
