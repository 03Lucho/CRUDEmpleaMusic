<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear clase</title>
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
                    
                    <option value="{{$instrum->idcategoria}}" > {{$instrum->nombre}}</option>
    
                    @empty
                    @endforelse
                </select>
            </div>
            <br>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="mombre">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion">
                <label for="costo">Costo</label>
                <input type="text" name="costo" id="costo">
                <label for="fecha">Fecha clase</label>
                <input type="date" name="fecha" id="fecha">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="time" name="horainicio" id="horainicio">
                <input type="time" name="horafin" id="horafin">
            </div>
            <br>
            <button>Enviar</button>
        </form>
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a>   
</body>
</html>
