<!DOCTYPE html>
<html lang="en">
<head>
    @foreach ($aprendiz as $aprendices)
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Perfil</title>
    <!-- font icons -->
    <link rel="stylesheet" href="asset/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <li id="cerrar" class="nav-item">
                @include('layouts/app')
            </li>
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class "social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle">Hola, me llamo</h4>
                <h1 class="header-title">{{ $aprendices->nombre }} {{ $aprendices->apellido }}</h1>
                <h6 class="header-mono">{{ $aprendices->descripcion }}</h6>
            </div>
        </div>
    </header>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav brand">
                    <div class="testimonial-card">
                        <div class="card-up" style="background-image: url('{{ asset('storage/fotos_aprendiz/' . $aprendices->Imagen) }}');"></div>
                        <div class="avatar mx-auto bg-white">
                            <img id="perfil" src="{{ asset('storage/fotos_aprendiz/' . $aprendices->Imagen) }}"
                                class="rounded-circle img-fluid" />
                        </div> 
                    <li id="martes" class="brand-txt">
                        <h5 class="brand-title">{{ $aprendices->nombre }} {{ $aprendices->apellido }}</h5>
                        <div class="brand-subtitle">Artista | Estudiante</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Descripcion</span> : {{ $aprendices->descripcion }}</li>
                    <li><span>Telefono</span> : {{ $aprendices->telefono }}</li>
                    <li><span>Identificacion</span> : {{ $aprendices->documento }}</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div id="botones">
        <a href="#" onclick="mostrarDatos('{{ route('aprendices.show', ['aprendiz' => $aprendices->idaprendiz]) }}')">Clases</a>
        <script>
            function mostrarDatos(url) {
                // Realizar petición AJAX
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function (data) {
                        // Manejar los datos recibidos, por ejemplo, mostrarlos en un div
                        $('#resultado').html(data);
                    },
                    error: function (error) {
                        console.error('Error al obtener los datos:', error);
                    }
                });
            }
        </script>
        <a href="{{ route('aprendices.edit', ['idaprendiz' => $aprendices->idaprendiz]) }}">Editar</a>
    </div>
    <div id="resultado" ></div>
</body>
<footer class="footer py-3">
    <div class="container">
        <p class="small mb-0 text-light">
            &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="C-crea" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">C-Crea</span></a> 
        </p>
    </div>
</footer>

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap 3 affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Isotope  -->
<script src="assets/vendors/isotope/isotope.pkgd.js"></script>

<!-- Google mpas -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

<!-- JohnDoe js -->
<script src="assets/js/johndoe.js"></script>
</html>


