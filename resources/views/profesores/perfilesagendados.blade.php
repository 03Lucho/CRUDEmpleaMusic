<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prfiles agendados</title>
<<<<<<< HEAD
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
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <h1 style="text-align: center">Perfil Aprendiz</h1>
    <br>
    <br>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Imagen</td>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Apellido</td>
                <td style="border:2px solid black; padding:5px">Email</td>
                <td style="border:2px solid black; padding:5px">Telefono</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
            </tr>
            @forelse ($aprendizes as $apren)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$apren->imagen}}</td>    
                <td style="border-right:2px solid black; padding:10px">{{$apren->nombre}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$apren->apellido}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$apren->email}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$apren->telefono}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$apren->descripcion}}</td>
>>>>>>> origin/esteban
             @empty
            @endforelse
        </table>
    </div>
<<<<<<< HEAD
=======
    <a href="{{ route('menu') }}" class="btn">Volver</a>
>>>>>>> origin/esteban
</body>
</html>

 
