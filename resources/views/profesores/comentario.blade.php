<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentario</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<br>
<br>
<h1>Comentario</h1>
<br>
<br>
<div style="text-align: center; position-absolute: 50%">
    <form action="{{route('profesores.comentarstore')}}"method='POST'>
        @csrf
        <br>
        <div>
            <label for="descripcion">Digite su comentario</label>
            <textarea style="margin-left: 2%; position:relative; top:50px" name="descripcion" id="descripcion" cols="60" rows="8"></textarea>
            <br><br><br>
            {{-- <Label>Frcha y hora en la que hace el comentario</Label>
            <input type="datetime-local" name="fechahora" id=""> --}}
            <br><br><br>
            <label for="tipo">Tipo de comentario (Queja, Reclamo o Sugerencia)</label>
            <input style="margin-left: 2%" type="text" name="tipo" id="tipo">
        </div>
        <br>
        <button>Enviar</button>
    </form>
</div>
</body>
</html>
