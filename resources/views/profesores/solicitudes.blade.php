<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
    <link rel="stylesheet" href="{{ asset('css/solicitudes.css') }}">
</head>
<body>
    <div class="container">
        <h2>Solicitudes</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>Nombre Aprendiz</th>
                    <th>Documento</th>
                    <th>Nombre Clase</th>
                    <th>Cupos</th>
                    <th>Fecha Agendada</th>
                    <th>Agenda Realizada El</th>
                    <th>Descripcion</th>
                    <th colspan="2">Acciones</th>
                </tr>
                @forelse ($solicitudagenda as $solic)
                    <tr>
                        <td>{{$solic->nomapren}}</td>
                        <td>{{$solic->docum}}</td>
                        <td>{{$solic->nomclas}}</td>
                        <td>{{$solic->numcups}}</td>
                        <td>{{$solic->fechaagendada}}</td>
                        <td>{{$solic->fechahora}}</td>
                        <td>{{$solic->descripcion}}</td>
                        <td>
                            @if ($solic->numcups > 0)
                                <form action="{{ route('profesores.confirmstore', ['id1' => $solic->idaprendiz, 'id2' => $solic->idclase, 'id3' => $solic->fechaagendada, 'id4' => $solic->fechahora, 'id5' => $solic->descripcion, 'id6' => $solic->idsolicitudagenda ]) }}" method="POST">
                                    @csrf
                                    <button type="submit">Aceptar</button>
                                </form>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('profesores.rechazo',$solic->idsolicitudagenda)}}"><button>Rechazar</button></a>
                        </td>
                    </tr>
                 @empty
                @endforelse
            </table>
        </div>
    </div>
</body>
</html>
