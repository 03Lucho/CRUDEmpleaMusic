<!-- resources/views/menu/menu.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleamusic</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">inicio</a></li>
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrar Usuario</a></li>
        </ul>
    </nav>
</body>
</html>
