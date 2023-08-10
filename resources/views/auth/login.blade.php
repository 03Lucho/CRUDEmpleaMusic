<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesión Aprendiz</title>
</head>
<body>
    <h1>Datos Inicio De Sesion</h1>
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
    
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
    
        <div class="form-group">
            <label for="rol">Selecciona un Rol:</label><br>
            <input type="radio" id="rol_admin" name="rol" value="admin" required>
            <label for="rol_admin">Admin</label><br>
            <input type="radio" id="rol_profesor" name="rol" value="profesor">
            <label for="rol_profesor">Profesor</label><br>
            <input type="radio" id="rol_aprendiz" name="rol" value="aprendiz">
            <label for="rol_aprendiz">Aprendiz</label><br>
        </div>
    
        <button type="submit">Iniciar Registro</button>
    </form>
    
</body>
</html>