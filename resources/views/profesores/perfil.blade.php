<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
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

