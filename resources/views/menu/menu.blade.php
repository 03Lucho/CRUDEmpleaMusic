<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Empleamusic</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <i class="fas fa-music icon"></i> Empleamusic
            </div>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}">Registrar Usuario</a></li>
                <li><a href="{{ route('aprendices.index') }}">Aprendiz</a></li>
            </ul>
        </nav>
    </header>

    <section class="header">
        <h1>Bienvenido a Empleamusic</h1>
        <p>Tu plataforma para explorar oportunidades en la industria musical</p>
        <a href="#" class="cta-button">Explorar</a>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <i class="fas fa-music icon"></i> Empleamusic
            </div>
            <ul class="footer-links">
                <li><a href="#">Acerca de nosotros</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
            </ul>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
