<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prfiles agendados</title>
    <link rel="stylesheet" href="{{ asset('css/perfilesagendados.css') }}">
</head>
<body>
    @include('partials/cerrarsesion')
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
                <td>Email</td>
                <td>Telefono</td>
                <td>Documento</td>
                <td>Descripcion</td>
            </tr>
            @forelse ($aprendizes as $apren)
                <tr>
                <td >{{$apren->Imagen}}</td>    
                <td >{{$apren->nombre}}</td>
                <td >{{$apren->apellido}}</td>
                <td >{{$apren->email}}</td>
                <td >{{$apren->telefono}}</td>
                <td >{{$apren->documento}}</td>
                <td >{{$apren->descripcion}}</td>
             @empty
            @endforelse
        </table>
    </div>
</body>
</html>

 
