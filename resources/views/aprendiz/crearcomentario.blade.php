<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentario</title>
    <link rel="stylesheet" href="{{ asset('css/comen.css') }}">
</head>
<body>
<br>
<br>
<h1>Comentario</h1>
<br>
<br>
<div style="text-align: center; position-absolute: 50%">
    <form action="{{ route('aprendiz.comentarstore') }}" method="post">
        @csrf
        <br>
        <div>
            <div>
                <label for="tipo">Tipo de comentario</label>
                <select name="tipo">
                    <option value="Queja" >Queja</option>
                    <option value="Reclamo" >Reclamo</option>
                    <option value="Sugerencia" >Sugerencia</option>
                </select>
            </div>
            <p></p>
            <label for="descripcion">Digite su comentario</label>
            <textarea style=" position:relative; top:50px" name="descripcion" id="descripcion" cols="60" rows="8"></textarea>
            <p></p>
        </div>
        <br>
        <button>Enviar</button>
    </form>
</div>
<a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
</html>