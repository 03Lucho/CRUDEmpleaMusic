<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <br>
    <br>
    <div style="text-align: center; position:absolute:50%">
    <br>
    <br>
    <h2>Solicitudes</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre Aprendiz</td>
                <td style="border:2px solid black; padding:5px">Nombre Clase</td>
                <td style="border:2px solid black; padding:5px">Fecha Agendada</td>
                <td style="border:2px solid black; padding:5px">Agenda Realizada El:</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="text-align: center; border:2px solid black;padding:5px " colspan="2">Acciones</td>
            </tr>
            @forelse ($solicitudagenda as $solic)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$solic->nomapren}}</td>
                <td  style="border-right:2px solid black; padding:10px">{{$solic->nomclas}}</td>
                <td name="fechaagendada" style="border-right:2px solid black; padding:10px">{{$solic->fechaagendada}}</td>
                <td name="fechahora" style="border-right:2px solid black; padding:10px">{{$solic->fechahora}}</td>
                <td name="descripcion" style="border-right:2px solid black; padding:10px">{{$solic->descripcion}}</td>
    
                <td>
                    <form action="{{ route('profesores.confirmstore', ['id1' => $solic->idaprendiz, 'id2' => $solic->idclase, 'id3' => $solic->fechaagendada, 'id4' => $solic->fechahora, 'id5' => $solic->descripcion, 'id6' => $solic->idsolicitudagenda ]) }}" method="POST">
                        @csrf
                        <button type="submit">Aceptar</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('profesores.rechazo',$solic->idsolicitudagenda)}}"><button>Rechazar</button></a>
                </td>
                
                </tr>
             @empty
            @endforelse
        </table>
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
</html>


