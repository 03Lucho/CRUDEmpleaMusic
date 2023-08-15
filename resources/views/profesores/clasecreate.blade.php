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
                <label for="idinstrumento">Seleccione el instrumento que va a esneñar</label>
                <select name="instrument">
                    @forelse ($instrumento as $instrum)
                    
                    <option value="{{$instrum->idinstrumento}}" > {{$instrum->nombre}}</option>
    
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
                <label for="disponibilidad">Disponibilidad</label>
                <input type="text" name="disponibilidad" id="disponibilidad">
            </div>
            <br>
            <button>Enviar</button>
        </form>
    </div>   
</body>
</html>
