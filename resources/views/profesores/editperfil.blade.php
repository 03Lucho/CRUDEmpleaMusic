<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar perfil</title>
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
            <label for="imagen">Imagen de perfil</label>
            <input type="file" name="imagen" id=""><br><br>
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
</body>
</html>
