<<<<<<< HEAD
@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: rgba(4, 79, 7, 0.412)">{{ __('Registrarse') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div style="text-align: center" class="logo">
                    <img src="assets/logo.ico" alt="">
                </div><br>

                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                
                    <div class="col-md-6">
                        <select style="width: 80px" id="role" class="form-control" name="role" required>
                            <option value="aprendiz">Aprendiz</option>
                            <option value="profesor">Docente</option>
                        </select>
                    </div>
                </div><br>  

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>
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
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Registro de Usuario</h1>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre de Usuario:</label>
                <input type="text" id="nombre" name="name" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="password" required>
            </div>

            <div class="form-group">
                <label for="rol">Selecciona un Rol:</label><br>
                <input type="radio" id="rol_profesor" name="role" value="profesor">
                <label for="rol_profesor">Profesor</label>
                <input type="radio" id="rol_aprendiz" name="role" value="aprendiz">
                <label for="rol_aprendiz">Aprendiz</label>
            </div>
        
            <button type="submit">Registrar</button>
        </form>
        <div class="footer">
            &copy; 2023 EmpleaMusic
        </div>
    </div>
</body>
</html>
>>>>>>> origin/esteban
