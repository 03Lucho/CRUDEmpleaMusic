<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear clase</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/crearclase.css') }}">
</head>

<body>

        @include('layouts/app')
    <div class="container">
        <form action="{{route('profesores.store')}}"method='POST'>
            @csrf
            <div>
                <label for="idcategoria">Seleccione la categoria que va a esneñar</label>
                <select name="instrument">
                    @forelse ($categoria as $instrum)
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align: center; position-absolute: 50%">
        <form action="{{route('profesores.store')}}"method='POST'>
            @csrf
            <div>
                <label for="idcategoria">Seleccione el instrumento que va a esneñar</label>
                <select name="categorias">
                    @forelse ($categorias as $instrum)
>>>>>>> origin/esteban
                    
                    <option value="{{$instrum->idcategoria}}" > {{$instrum->nombre}}</option>
    
                    @empty
                    @endforelse
                </select>
            </div>
            <br>
            <div>
<<<<<<< HEAD
                <input type="hidden" name="idprofesor" id="idprofesor" value="{{$codigo}}">
=======
>>>>>>> origin/esteban
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="mombre">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion">
                <label for="costo">Costo</label>
                <input type="text" name="costo" id="costo">
<<<<<<< HEAD
                <label for="cupos">Cupos</label>
                <input type="number" name="cupos" id="cupos">
=======
>>>>>>> origin/esteban
                <label for="fecha">Fecha clase</label>
                <input type="date" name="fecha" id="fecha">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="time" name="horainicio" id="horainicio">
                <input type="time" name="horafin" id="horafin">
            </div>
            <br>
            <button>Enviar</button>
        </form>
<<<<<<< HEAD
    </div>   
=======
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a>   
>>>>>>> origin/esteban
</body>
</html>
