<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perfil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href={{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i")}} rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    /* Tus estilos personalizados aquí... */
    /* Puedes ajustar estos estilos según tus necesidades */
    /* .section-container {
      margin-top: 40px;
    } */

    .btn-container {
      display: flex;
      gap: 10px;
      margin-top: 20px;
    }

    .btn-container button {
      padding: 10px 15px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-container button:hover {
      background-color: #2980b9;
    }
  </style>
</head>


<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header">

    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light">C-crea</h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Clases</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

</div>
<br><br><br><br>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Bienvenido</h1>
      <p><span class="typed" data-typed-items=" C-crea una nueva visión del arte "></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main" style="align-self: flex-start">
      <br>
    <div class="section-title">
      <h2>Informacion De Las Clases</h2>
    </div>
    @forelse ($clases as $class)

    <!-- ======= Info Clase ======= -->

    <section id="about" class="about section-container">
        <div class="container">

        <div class="class-info" style="display: list-item" style="align-self: stretch">
          <p><strong>Nombre:</strong> {{ $class->nombre }}</p>
          <p><strong>Categoria:</strong> {{ $class->nomins }}</p>
          <p><strong>Descripcion:</strong> {{ $class->descripcion }}</p>
          <p><strong>Fecha:</strong> {{ $class->fecha }}</p>
          <p><strong>Disponibilidad:</strong> {{ $class->horainicio }} - {{ $class->horafin }}</p>
          <p><strong>Cupos:</strong> {{ $class->cupos }}</p>
          <p><strong>Costo:</strong> {{ $class->costo }}</p>
      </div>

        <div class="btn-container">
        <a href="{{ route('profesores.editarclases', ['id' => $class->idclase, 'codigo' => $codigo]) }}"><button>Editar</button></a>
        <a href="{{ route('profesores.create', $codigo) }}"><button>Crear clase</button></a>
      </div>
      </div>
    </section><!-- End class Section -->
    @empty
    @endforelse


    <!-- ======= Editar perfil ======= -->
<section id="facts" class="facts">
    <div class="container">
        <div class="section-title">
            <h2>Editar Perfil</h2>
            <div class="btn-container">
                <button onclick="togglePerfilView('{{ route("profesores.perfill", $codigo) }}')">Perfil</button>
            </div>
            <div id="perfilContainer"></div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    let perfilViewOpen = false;

    function togglePerfilView(url) {
        if (perfilViewOpen) {
            // Si la vista del perfil está abierta, cerrarla
            $('#perfilContainer').empty();
            perfilViewOpen = false;
        } else {
            // Si la vista del perfil está cerrada, cargarla en un iframe
            $('#perfilContainer').html('<iframe id="perfilIframe" src="' + url + '" frameborder="0"></iframe>');
            perfilViewOpen = true;
        }
    }
</script>


{{-- AGENDAS --}}
    <section id="facts" class="facts">
      <div class="container">
          <div class="section-title">
              <h2>Agendas</h2>
              <div class="btn-container">
                  <button onclick="toggleAgendasView({{ $class->idclase }})">Ver/Cerrar agendas</button>
              </div>
              <div id="agendasContainer"></div>
          </div>
      </div>
  </section>
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
      let agendasViewOpen = false;
  
      function toggleAgendasView(classId) {
          if (agendasViewOpen) {
              // Si la vista de agendas está abierta, cerrarla
              $('#agendasContainer').empty();
              agendasViewOpen = false;
          } else {
              // Si la vista de agendas está cerrada, cargarla en un iframe
              $('#agendasContainer').html('<iframe id="agendaIframe" src="{{ route("profesores.showagen", ["id" => ":classId"]) }}'.replace(':classId', classId) + '" frameborder="0"></iframe>');
              agendasViewOpen = true;
          }
      }
  </script>
  
  
  
  
  


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; C-Crea <strong><span>Profesor</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Diseño por <a href={{ route("plantillainicio")}}>C-Crea</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     <!-- Vendor JS Files -->
     <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
     <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
     <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
     <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
     <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
 
     <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>


</body>

</html>