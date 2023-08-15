<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea perfil Sesión Profesor</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body style="text-align: center">
    <h1>Crea tu perfil de Docente</h1>
    <form action="{{ route('profesores.storeperfil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <!-- Agregar campo para la foto de perfil -->
        <label for="imagen">Foto de Perfil:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*" required>
        <br>

        <!-- Resto de los campos del formulario -->
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
        <br>

        <label for="aniosexperiencia">Años de experiencia:</label>
        <input type="number" name="aniosexperiencia" id="aniosexperiencia" required>
        <br>

        <label for="especialidad">Especialidad:</label>
        <textarea id="especialidad" name="especialidad" rows="4" required></textarea>

        <button type="submit">Guardar Perfil</button>
    </form>
</body>
</html>