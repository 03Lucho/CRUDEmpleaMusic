<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Sesión Aprendiz</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Datos Inicio De Sesión</h1>
        </div>
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
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
        <div class="form-group">
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
    <div class="footer">
        © 2023 EmpleaMusic
    </div>
</div>
</body>
</html>