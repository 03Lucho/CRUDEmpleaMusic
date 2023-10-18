<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexadmin.css') }}">
</head>
<body>  
    @include('layouts/app')
    <br>
    <br>
    <div style="text-align: center; ">
    <a href={{route ('cat.create')}}><button >Crear Categoria</button></a> <br><br>
    <a href={{route ('admins.showcats')}}><button >Ver categorias</button></a> <br><br>
    </div>
    <br>
    <br>
    <div class="container" style=" text-align: center">
        <h2 style="color: white">Comentarios</h2>

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

