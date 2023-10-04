<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> origin/esteban
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver agendas</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/veragenda.css') }}">
</head>

<body>
    @include('layouts/app')
    <div class="container">
        <h2>Agendas</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>Nombre Aprendiz</th>
                    <th>Nombre Clase</th>
                    <th>Fecha Agendada</th>
                    <th>Agenda Realizada El</th>
                    <th>Descripcion</th>
                </tr>
                @forelse ($agenda as $agend)
                <tr>
                    <td><a href="{{ route('profesores.perfaprendagend', $agend->idaprendiz) }}">{{ $agend->nomapren }}</a></td>
                    <td>{{ $agend->nomclas }}</td>
                    <td>{{ $agend->fechaagendada }}</td>
                    <td>{{ $agend->fechahora }}</td>
                    <td>{{ $agend->descripcion }}</td>
                </tr>
                @empty
                @endforelse
            </table>
        </div>
    </div>
</body>

</html>
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <div style="text-align: center; position:absolute:50%">
    <br>
    <br>
    <h2>Agendas</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre Aprendiz</td>
                <td style="border:2px solid black; padding:5px">Nombre Clase</td>
                <td style="border:2px solid black; padding:5px">Fecha Agendada</td>
                <td style="border:2px solid black; padding:5px">Agenda Realizada El:</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
            </tr>
            @forelse ($agenda as $agend)
                <tr>
                <td style="border-right:2px solid black; padding:10px"><a href="{{route('profesores.perfaprendagend',$agend->idaprendiz)}}">{{$agend->nomapren}}</a></td>
                <td style="border-right:2px solid black; padding:10px">{{$agend->nomclas}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$agend->fechaagendada}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$agend->fechahora}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$agend->descripcion}}</td>
                
                </tr>
             @empty
            @endforelse
        </table>
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
</html>

>>>>>>> origin/esteban
