<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prfiles agendados</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/perfilesagenda.css') }}">
</head>
<body>
    @include('layouts/app')
    <br>
    <br>
    <div class="container">
        <h1 >Perfil Aprendiz</h1>
        <br>
        <table>
            <tr>
                <td>Imagen</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Telefono</td>
                <td>Documento</td>
                <td colspan="4">Descripcion</td>
            </tr>
            @forelse ($aprendizes as $apren)
                <tr>
                <td >{{$apren->Imagen}}</td>    
                <td >{{$apren->nombre}}</td>
                <td >{{$apren->apellido}}</td>
                <td >{{$apren->telefono}}</td>
                <td >{{$apren->documento}}</td>
                <td colspan="4">{{$apren->descripcion}}</td>
             @empty
            @endforelse
        </table>
    </div>
</body>
</html>

 
