<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Comentarios</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/comentarios.css') }}">
</head>
<body>
    @include('layouts/app')
    <div class="container">
        <h1>Comentario</h1>
        <form action="{{route('profesores.comentarstore')}}" method='POST'>
            @csrf
            <div class="form-group">

                <label for="tipo">Tipo de comentario (Queja, Reclamo o Sugerencia)</label>
                <select name="tipo" id="tipo">
                    <option value="Queja">Queja</option>
                    <option value="Reclamo">Reclamo</option>
                    <option value="Sugerencia">Sugerencia</option>
                </select>
                <br>

                <label for="descripcion">Digite su comentario</label><br>
                <textarea style="margin-right: 2px" name="descripcion" id="descripcion" cols="70" rows="8"></textarea>
                <br>

            </div><br>
            <button>Enviar</button>
        </form>
    </div>
</body>
<footer></footer>
=======
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
<a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
>>>>>>> origin/esteban
</html>
