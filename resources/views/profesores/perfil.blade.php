<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
</head>
<body>
    <div class="container">
        <h1>Perfil</h1>
        <div class="profile-info">
            @forelse ($profesor as $prof)
                <div class="profile-item">
                    <img src="{{asset('storage/perfil_profesores/' . $prof->Imagen)}}" alt="foto de perfil" width="100">
                    <p><strong>Nombre:</strong> {{$prof->nombre}}</p>
                    <p><strong>Apellido:</strong> {{$prof->apellido}}</p>
                    <p><strong>Email:</strong> {{$prof->email}}</p>
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
