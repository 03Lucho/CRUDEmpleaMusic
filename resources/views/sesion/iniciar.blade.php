<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{ asset('css/iniciarsesion.css') }}">
</head>
<body>
    <div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" required>
    
        <label for="password">Contraseña</label>
        <input type="password" name="password" required>
    
        <label for="role">Rol</label>
        <select name="role">
            <option value="profesor">Profesor</option>
            <option value="aprendiz">Aprendiz</option>
            <option value="administrador">Administrador</option>
        </select>
    
        <button type="submit">Iniciar Sesión</button>
    </form>
    </div>
</body>
</html>

