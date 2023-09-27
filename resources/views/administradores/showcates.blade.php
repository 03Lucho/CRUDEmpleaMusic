<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumentos creados</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/showcates.css') }}">
</head>
<body>
    @include('layouts/app')
    <h2 style="text-align: center; color:white">Categorias</h2>
    <div>
    <div class="table-container">
        
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Tipo</td>
            </tr>
            @forelse ($categorias as $instru)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$instru->nombre}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$instru->tipo}}</td>
                </tr>
             @empty
            @endforelse
        </table>
    </div>
    </div>
</body>
</html>

