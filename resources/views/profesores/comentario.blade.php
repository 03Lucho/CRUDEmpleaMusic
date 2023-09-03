<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentario</title>
    <link rel="stylesheet" href="{{ asset('css/comentario.css') }}">
</head>
<body>
    <div class="container">
        <h1>Comentario</h1>
        <form action="{{route('profesores.comentarstore')}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="descripcion">Digite su comentario</label>
                <textarea name="descripcion" id="descripcion" cols="60" rows="8"></textarea>
                <br>
                
                <input type="hidden" name="idprofesor" id="idprofesor" value="{{$codigo}}">
                <br>
                
                <label for="tipo">Tipo de comentario (Queja, Reclamo o Sugerencia)</label>
                <input type="text" name="tipo" id="tipo">
                <br>
            </div><br>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>
