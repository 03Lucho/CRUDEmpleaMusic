<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Registro de Usuario</h1>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre de Usuario:</label>
                <input type="text" id="nombre" name="name" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="password" required>
            </div>

            <div class="form-group">
                <label for="rol">Selecciona un Rol:</label><br>
                <input type="radio" id="rol_profesor" name="role" value="profesor">
                <label for="rol_profesor">Profesor</label>
                <input type="radio" id="rol_aprendiz" name="role" value="aprendiz">
                <label for="rol_aprendiz">Aprendiz</label>
            </div>
        
            <button type="submit">Registrar</button>
        </form>
        <div class="footer">
            &copy; 2023 EmpleaMusic
        </div>
    </div>
</body>
</html>
