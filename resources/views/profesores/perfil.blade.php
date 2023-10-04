<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/perfilprofesores.css') }}">

</head>
<body>
    @include('layouts/app')
    <div class="container">
        <h1>Perfil</h1>
        <div class="profile-info">
            @forelse ($profesor as $prof)
                <div class="profile-item">
                    <img src="{{asset('storage/perfil_profesores/' . $prof->Imagen)}}" alt="foto de perfil" width="100">
                    <p><strong>Nombre:</strong> {{$prof->nombre}}</p>
                    <p><strong>Apellido:</strong> {{$prof->apellido}}</p>
                    <p><strong>Telefono:</strong> {{$prof->telefono}}</p>
                    <p><strong>Documento:</strong> {{$prof->documento}}</p>
                    <p><strong>Descripcion:</strong> {{$prof->descripcion}}</p>
                    <p><strong>Años de experiencia:</strong> {{$prof->aniosexperiencia}}</p>
                    <p><strong>Especialidad:</strong> {{$prof->especialidad}}</p>
                    <a href="{{route('profesores.editarperfil',$prof->idprofesor)}}"><button>Editar Perfil</button></a>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</body>
</html>
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <h1>Perfil</h1>
    <br>
    <br>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Foto de perfil</td>
                <td style="border:2px solid black; padding:5px">Nombre</td>
                <td style="border:2px solid black; padding:5px">Apellido</td>
                <td style="border:2px solid black; padding:5px">Email</td>
                <td style="border:2px solid black; padding:5px">Telefono</td>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="border:2px solid black;padding:5px " >Años de experiencia</td>
                <td style="border:2px solid black;padding:5px " >Especialidad</td>
            </tr>
            @forelse ($profesor as $prof)
                <tr>
                <td style="border-right:2px solid black; padding:10px"><img src="{{asset('storage/perfil_profesores/' . $prof->Imagen)}}" alt="foto de perfil" width="100"></td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->nombre}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->apellido}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->email}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->telefono}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->descripcion}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->aniosexperiencia}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$prof->especialidad}}</td>
    
               
                <a href="{{route('profesores.editarperfil',$prof->idprofesor)}}"><button>Editar Perfil</button></a>
                
                
             @empty
            @endforelse
        </table>
    </div>
    <a href="{{ route('menu') }}" class="btn">Volver</a> 
</body>
</html>

>>>>>>> origin/esteban
