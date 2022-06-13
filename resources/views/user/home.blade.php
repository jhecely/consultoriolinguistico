<!DOCTYPE html>
<html lang="en" id=home>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Consultorio Jurídico</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> 72563700</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> froy4g@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://m.facebook.com/CAJF-UPEA-104812668584960/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/DerechoUPEA_?t=-PZgLm29Y6jBN8XKCOLKHw&s=09"><span class="mai-logo-twitter"></span></a>

            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Consultorio Jurídico</span>-UPEA</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control ml-lg-25" placeholder="Buscar..." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#doctor">Abogados</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#contact">Contáctanos</a>
            </li>

            @if(Route::has('login'))
            @auth


            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Iniciar sesión</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registrarse</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert"></button>
        {{session()->get('message')}}
    </div>
  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Te ayudamos a resolver tu problema judicial</span>
        <h1 class="display-4">Cosultorio Jurídico UPEA</h1>
        <a href="#appointment" class="btn btn-primary">Realizar consulta</a> 

      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Realiza</span> consultas a los abogados</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Consultas</span>-seguras y confiables</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Asesoramiento</span>-acertado</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Bien venidos al Consultorio Jurídico <br> UPEA</h1>
            <p class="text-grey mb-4">Asesoramos a la población en las distintas áreas del derecho: Penal, Civil, Agrario, Laboral, Familia y Modalidades de Graduación.</p>
            
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

  @include('user.appointment')

  

  <footer class="page-footer" style="padding-top: 100px;">
    <div class="container" id=contact >
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Estamos ubicados</h5>
          <ul class="footer-menu">
           <p class="footer-link">Edificio Carrera de Derecho,</p>
           <p class="footer-link">Av. Sucre A, Of.12</p>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Horario</h5>
          <ul class="footer-menu">

            <p class="footer-link">Atención: 08:00 a 14:00</p>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contáctanos</h5> 
              <a href="#"><span class="mai-call text-primary"></span> 72563700</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> froy4g@gmail.com</a>
        </div>
          <div class="col-sm-6 col-lg-3 py-3">
          <h5 class="mt-3">Redes sociales</h5>
          <div class="footer-sosmed mt-3">
            <a href="https://m.facebook.com/CAJF-UPEA-104812668584960/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="https://twitter.com/DerechoUPEA_?t=-PZgLm29Y6jBN8XKCOLKHw&s=09" target="_blank"><span class="mai-logo-twitter"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022.Developed by JhennyCM. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
