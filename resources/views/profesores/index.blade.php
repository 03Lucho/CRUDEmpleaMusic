<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> origin/esteban
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/arcprincipal.css') }}">
</head>

<body>
    @include('layouts/app')
    <div class="container">
        <a href="{{ route('profesores.create', $codigo) }}"><button>Crear clase</button></a>
        <a href="{{ route('profesores.perfill', $codigo) }}"><button>Perfil</button></a>
    </div>

    <h2>Mis clases creadas</h2>
    <div class="centered-container">
        @forelse ($clase as $class)
            <div class="class-item">
                
                <div class="class-info">
                    <p><strong>Nombre:</strong> {{ $class->nombre }}</p>
                    <p><strong>Categoria:</strong> {{ $class->nomins }}</p>
                    <p><strong>Descripcion:</strong> {{ $class->descripcion }}</p>
                    <p><strong>Fecha:</strong> {{ $class->fecha }}</p>
                    <p><strong>Disponibilidad:</strong> {{ $class->horainicio }} - {{ $class->horafin }}</p>
                    <p><strong>Cupos:</strong> {{ $class->cupos }}</p>
                    <p><strong>Costo:</strong> {{ $class->costo }}</p>
                </div>
                
                <div class="class-actions">
                    <a href="{{ route('profesores.editarclases', ['id' => $class->idclase, 'codigo' => $codigo]) }}"><button>Editar</button></a>
                    @if ($class->cupos > 0)
                        <a href="{{ route('profesores.showagen', ['id' => $class->idclase]) }}"><button>Ver agendas</button></a>
                    @endif
                </div>
            </div>
        @empty
        @endforelse
    </div>
    <br><br><br><br>
    
</body>

</html>
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <br>
    <div style="text-align: center; position:absolute:50%">
    <a href={{route ('profesores.create')}}><button >Crear clase</button></a> <br><br>
    <a href={{route ('profesores.solicitudes')}}><button >Solicitudes</button></a> <br><br>
    <a href={{route ('profesores.perfill')}}><button >Perfil</button></a> <br>
    <br>
    <br>
    <h2>Mis clases creadas</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Instrumento</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="border:2px solid black; padding:5px">Fecha</td>
                <td style="border:2px solid black; padding:5px" colspan="2">Disponibilidad</td>
                <td style="border:2px solid black; padding:5px">Costo</td>
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
    
                <td style="padding:10px">
                <a href="{{route('profesores.editarclases',$class->idclase)}}" ><button>Editar</button></a>
                </td>
                <td style="padding:10px">
                    <a href="{{route('profesores.showagen',$class->idclase)}}"><button>Ver agendas</button></a>
                </td>
                </tr>
             @empty
            @endforelse
        </table>
    </div>
     <div style="text-align: center; margin-top:2%">
        <a href={{route ('profesores.createcomentario')}}><button >Realizar comentario</button></a>
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a>
</body>
</html>

>>>>>>> origin/esteban
