<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar clase</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/editclase.css') }}">
</head>
<body>
    @include('layouts/app')
    <div class="container">
        <form action="{{ route('profesores.updateclass', ['id' => $clase->idclase, 'codigo' => $codigo] ) }}" method='PUT'>
            @csrf
            <div class="form-group">
                <label for="idcategoria">Seleccione la categoria que va a enseñar</label>
                <select name="idcategoria" id="idcategoria">
                    @forelse ($categoria as $instrum)
                    @if ($clase->idcategoria == $instrum->idcategoria)
                    <option value="{{ $instrum->idcategoria }}" selected>{{ $instrum->nombre }}</option>
                    @else 
                    <option value="{{ $instrum->idcategoria }}">{{ $instrum->nombre }}</option>
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align: center; position-absolute: 50%">
        <form action="{{route('profesores.updateclass',$clase->idclase)}}"method='put'>
            @csrf
            <div>
                <label for="">Seleccione el instrumento que va a esneñar</label>
                <select name="idinstrumento" id="">
                    @forelse ($instrumento as $instrum)
                    @if ($clase->idinstrumento==$instrum->idinstrumento)
                    <option value="{{$instrum->idinstrumento}}" selected>{{$instrum->nombre}}</option>
                    @else 
                    <option value="{{$instrum->idinstrumento}}">{{$instrum->nombre}}</option>
>>>>>>> origin/esteban
                    @endif
                    @empty
                    @endforelse
                </select>
            </div>
<<<<<<< HEAD
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ $clase->nombre }}"><br><br>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value="{{ $clase->descripcion }}"><br><br>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" value="{{ $clase->fecha }}"><br><br>
            </div>

            <div class="form-group">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="time" name="horainicio" id="horainicio" value="{{ $clase->horainicio }}">
                <input type="time" name="horafin" id="horafin" value="{{ $clase->horafin }}"><br><br>
            </div>
            <div class="form-group">
                <label for="costo">Costo</label>
                <input type="text" name="costo" id="costo" value="{{ $clase->costo }}"><br><br>
=======
            <br>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="mombre" value="{{$clase->nombre}}"><br><br>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value="{{$clase->descripcion}}"><br><br>
                <label for="costo">Costo</label>
                <input type="text" name="costo" id="costo" value="{{$clase->costo}}"><br><br>
                <label for="disponibilidad">Disponibilidad</label >
                <input type="time" name="horainicio" id="horainicio" value="{{$clase->horainicio}}">
                <input type="time" name="horafin" id="horafin" value="{{$clase->horafin}}"><br><br>
                <label for="fecha">Fecha</label >
                <input type="date" name="fecha" id="fecha" value="{{$clase->fecha}}"><br><br>
                <label for="estado">Estado:</label>
                <input type="radio" name="estado" id="estado" style="margin-left: 2%" value="1" checked> Activa
                <input type="radio" name="estado" id="estado" style="margin-left: 2%" value="0"> Inactiva
>>>>>>> origin/esteban
            </div>
            <br>
            <button>Actualizar</button>
        </form>
<<<<<<< HEAD
    </div>    
=======
    </div> 
    <a href="{{ route('menu') }}" class="btn">Volver</a>   
>>>>>>> origin/esteban
</body>
</html>
