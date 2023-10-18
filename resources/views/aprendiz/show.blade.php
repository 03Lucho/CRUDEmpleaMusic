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
    <h2>Mis clases disponibles</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Instrumento</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="border:2px solid black; padding:5px">Fecha</td>
                <td style="border:2px solid black; padding:5px" colspan="2">Disponibilidad</td>
                <td style="border:2px solid black; padding:5px">Costo</td>
                <td style="border:2px solid black; padding:5px">Cupos</td>
                <td style="border:2px solid black; padding:5px">Profesor</td>
                <td style="text-align: center; border:2px solid black;padding:5px " colspan="2">Acciones</td>
            </tr>
            @forelse ($clase as $class)
                <tr>               
                <td style="border:2px solid black; padding:10px">{{$class->nombre}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->nomins}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->descripcion}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->fecha}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->horainicio}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->horafin}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->costo}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->cupos}}</td>
                <td style="border:2px solid black; padding:10px">{{$class->nameprofe}}</td>
                @if ($class->cupos>0)
                <td style="padding:10px">
                    <a href="{{ route('agendar.clase', ['idclase' => $class->idclase]) }}">
                   <button>Agendar</button>
                    </a>
                </td>
                @endif
             @empty
            @endforelse
        </table>
    </div>
     <div style="text-align: center; margin-top:2%">
        {{-- <a href="{{ route('aprendiz.comenaprendiz') }}"><button>Realizar comentario</button></a> --}}
    </div>
</body>
</html>