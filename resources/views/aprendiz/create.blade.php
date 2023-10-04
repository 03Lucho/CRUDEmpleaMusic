<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Crea perfil Sesión Aprendiz</title>
</head>
<body>
    <h1>Crea tu perfil de Aprendiz</h1>
    <form action="{{ route('aprendices.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="Imagen">Foto de Perfil:</label>
        <input type="file" id="Imagen" name="Imagen" accept="image/*" required>
        <br>

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

        <button type="submit">Guardar Perfil</button>
    </form>
</body>
</html>
