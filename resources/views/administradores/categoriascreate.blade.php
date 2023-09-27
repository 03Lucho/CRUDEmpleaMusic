<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear instrumento</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/crearcate.css') }}">
</head>
<body>
    <br>
    @include('layouts/app')
    <br>
    <br>
    <br>
    <div class="container" >
        <form action="{{route('cat.store')}}" method='POST'> 
            @csrf
            <br>
            <div>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="nombre"> <br>
                <label for="tipo">Tipo de Instrumento</label><br>
                <input type="text" name="tipo" id="tipo"><br>
            </div>
            <br>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>
