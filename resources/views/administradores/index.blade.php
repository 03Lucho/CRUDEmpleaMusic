<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <div style="text-align: center; ">
    <a href={{route ('instru.create')}}><button >Crear Instrumento</button></a> <br><br>
    <br>
    <br>
    <h2>Comentarios</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="border:2px solid black; padding:5px">Fecha Y Hora</td>
                <td style="border:2px solid black; padding:5px">Tipo</td>
            </tr>
            @forelse ($comentario as $coment)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$coment->descripcion}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$coment->fechahora}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$coment->tipo}}</td>
                </tr>
             @empty
            @endforelse
        </table>
    </div>
</body>
</html>

