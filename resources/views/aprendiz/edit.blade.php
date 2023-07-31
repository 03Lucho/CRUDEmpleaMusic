<!DOCTYPE html>
<html>
<head>
    <title>Editar Aprendiz</title>
</head>
<body>
    <h1>Editar Aprendiz</h1>
    <form action="{{ route('aprendices.update', $aprendiz->idaprendiz) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $aprendiz->nombre }}" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ $aprendiz->apellido }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $aprendiz->email }}" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena">
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="{{ $aprendiz->telefono }}" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $aprendiz->descripcion }}</textarea>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
