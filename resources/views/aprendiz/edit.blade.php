<!DOCTYPE html>
<html>
<head>
    <title>Editar Aprendiz</title>
</head>
<body>
    <h1>Editar Aprendiz</h1>
    <form action="{{ route('aprendices.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <!-- Agregar campo para la foto de perfil -->
        <label for="Imagen">Foto de Perfil:</label>
        <input type="file" id="Imagen" name="Imagen" accept="image/*" required>
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

        <button type="submit">Guardar Perfil</button>
    </form>
</body>
</html>
