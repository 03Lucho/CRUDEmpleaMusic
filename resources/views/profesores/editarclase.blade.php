<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar clase</title>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
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
                <label for="">Seleccione la categoria que va a esneñar</label>
                <select name="idcategoria" id="">
                    @forelse ($categoria as $instrum)
                    @if ($clase->idcategoria==$instrum->idcategoria)
                    <option value="{{$instrum->idcategoria}}" selected>{{$instrum->nombre}}</option>
                    @else 
                    <option value="{{$instrum->idcategoria}}">{{$instrum->nombre}}</option>
                    @endif
                    @empty
                    @endforelse
                </select>
            </div>
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
            </div>
            <br>
            <button>Actualizar</button>
        </form>
    </div>    
</body>
</html>
