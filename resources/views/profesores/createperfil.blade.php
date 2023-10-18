<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea perfil Sesión Profesor</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/registrodocente.css') }}">
</head>

<body style="text-align: center">
    @include('layouts/app')
    <div class="container">
        <h1>Crea tu perfil de Docente</h1>
        <form action="{{ route('profesores.storeperfil') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="user_id" id="user_id" value="{{ $idusuario }}">

            <label for="Imagen">Foto de Perfil:</label>
            <input type="file" id="Imagen" name="Imagen" accept="image/*" required>
            <br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>

            <!-- Resto de los campos del formulario -->
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            <br>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
            <br>

            <label for="documento">Documento:</label>
            <input type="text" name="documento" id="documento" required>
            <br>

            <label for="aniosexperiencia">Años de experiencia:</label>
            <input type="number" name="aniosexperiencia" id="aniosexperiencia" required>
            <br>

            <label for="especialidad">Especialidad:</label>
            <textarea id="especialidad" name="especialidad" rows="4" required></textarea>
            <br>
            <button type="submit">Guardar Perfil</button>
        </form>
    </div>
</body>

</html>
