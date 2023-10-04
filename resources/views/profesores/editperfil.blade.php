<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar perfil</title>
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/editperfil.css') }}">
</head>
<body>
    @include('layouts/app')
    <div class="container">
        <form action="{{route('profesores.perfilupdate',$profesor->idprofesor)}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="{{$profesor->nombre}}"><br><br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" value="{{$profesor->apellido}}"><br><br>
                <label for="Imagen">Imagen de perfil</label>
                <input type="file" name="Imagen"><br><br>
                <label for="">Telefono</label>
                <input type="number" name="telefono" value="{{$profesor->telefono}}"><br><br>
                <label for="">Descripcion</label>
                <textarea name="descripcion" style="height: 80px; width:300px">{{$profesor->descripcion}}</textarea><br><br>
                <label for="">Años de experiencia</label>
                <input type="number" name="aniosexperiencia" value="{{$profesor->aniosexperiencia}}"><br><br>
                <label for="">Documento</label>
                <input type="text" name="documento" value="{{$profesor->documento}}"><br><br>
                <label for="">Especialidad</label>
                <input type="text" name="especialidad" value="{{$profesor->especialidad}}"><br><br>
                <button>Actualizar</button>
            </div>
        </form>
    </div>    
=======
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div style="text-align: center; position-absolute: 50%">
        <form action="{{route('profesores.perfilupdate',$profesor->idprofesor)}}"method='POST' enctype="multipart/form-data">
            @csrf
            <div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="" value="{{$profesor->nombre}}"><br><br>
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="" value="{{$profesor->apellido}}"><br><br>
            <label for="Imagen">Imagen de perfil</label>
            <input type="file" name="Imagen" id=""><br><br>
            <label for="">Email</label>
            <input type="text" name="email" id="" value="{{$profesor->email}}"><br><br>
            <label for="">Telefono</label>
            <input type="number" name="telefono" id="" value="{{$profesor->telefono}}"><br><br>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" id="" style="height: 80px; width:500px" value="{{$profesor->descripcion}}"><br><br>
            <label for="">Años de experiencia</label>
            <input type="number" name="aniosexperiencia" id="" value="{{$profesor->aniosexperiencia}}"><br><br>
            <label for="">Especialidad</label>
            <input type="text" name="especialidad" id="" value="{{$profesor->especialidad}}"><br><br>
            <br><br>
            <button>Actualizar</button>
            </div>
            
        </form>
    </div>    
    <a href="{{ route('menu') }}" class="btn">Volver</a>
>>>>>>> origin/esteban
</body>
</html>
