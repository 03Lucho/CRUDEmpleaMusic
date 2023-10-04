<!DOCTYPE html>
<html>
<head>
    <title>Editar Aprendiz</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1>Editar Aprendiz</h1>
    <form action="{{ route('aprendices.update', ['aprendiz' => $aprendiz->idaprendiz]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="{{$aprendiz->nombre}}">
        <br>


        <label for="Imagen">Foto de Perfil:</label>
        <input type="file" id="Imagen" name="Imagen" accept="image/*">
        @if ($aprendiz->Imagen)
        <img src="/storage/fotos_aprendiz/{{ $aprendiz->Imagen }}" alt="Foto de perfil">
        @endif
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required value="{{$aprendiz->apellido}}">
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{$aprendiz->email}}">
        <br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required value="{{$aprendiz->contrasena}}">
        <br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required value="{{$aprendiz->telefono}}">
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required>{{ $aprendiz->descripcion }}</textarea>
        <br>

        <button type="submit">Guardar Perfil</button>
    </form>
</body>
</html>
