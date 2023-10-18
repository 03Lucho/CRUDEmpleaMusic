<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar clase</title>
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
                    @endif
                    @empty
                    @endforelse
                </select>
            </div>
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
            </div>
            <br>
            <button>Actualizar</button>
        </form>
    </div>    
</body>
</html>
