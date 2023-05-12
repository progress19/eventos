<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf_token" content="{{ csrf_token() }}" />

  <title>Eventos San telmo</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/galeria.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}"> 
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 

  <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/brands.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('/images/eventos-bsas.svg') }}" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
            <img src="{{ asset('/images/eventos-bsas.svg') }}" style="width:150px" class="img-fluid">
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" aria-current="page" href="#salones">SALONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#servicios">SERVICIOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#cocktails">COCKTAILS & TRAGOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#catering">CATERING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#galeria">GALERIA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#contacto">CONTACTO</a>
            </li>
            <li class="nav-item no-desk">
              <a class="nav-link" href="https://api.whatsapp.com/send?phone=5491168759015"><i class="fa-brands fa-whatsapp"></i> (+54911) 6875-9015</a>              
            </li>
          </ul>
        </div>
      </div>
    </div>
 </nav>

 @yield('content')

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script type="text/javascript" src=" {{ asset('js/aos.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/lightcase.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.5/jquery.mobile-events.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

<script>

  $('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if (target.length) {
    event.preventDefault();
      $('html, body').stop().animate({ scrollTop: target.offset().top - 100 }, 1000); }
    });
    
</script>
  
</body>

@yield('page-js-script')

</html>