<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf_token" content="{{ csrf_token() }}" />

  <title>Eventos Buenos Aires - Alquiler de salones premium para eventos corporativos y sociales - Eventos - Alquiler de salones</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/galeria.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}"> 
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">  
  <link rel="stylesheet" href="{{ asset('css/jcarousel.responsive.css') }}" rel="stylesheet">

  <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">    
  <link href="{{ asset('css/brands.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KD7TMV95');</script>
<!-- End Google Tag Manager -->
    
</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD7TMV95"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
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
              <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target=".navbar-offcanvas.show" href="#cocktails">CATERING</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MENU
              </a>
              <ul class="dropdown-menu dropdown-menu-start bg-dark" aria-labelledby="menuDropdown">
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1mPyXefQjIElVeezwgvdxaBarO35o-iT6/view?usp=drive_link" target="_blank">Workshop</a></li>
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1wGRGlgrqitL4S-QPQX3DDK-DLWcBBGqY/view?usp=drive_link" target="_blank">Rooftop</a></li>
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1dtO6CP-7Yw_ly9UVq-4JjO8SHRF7ASGG/view?usp=drive_link" target="_blank">Degustación & Maridaje</a></li>
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1TGPuuYGPDMShjfNVdLf04GSwo9zJoWcy/view?usp=drive_link" target="_blank">Cocktails</a></li>
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1LU6AtpQK3FWlMypjmM-2e0t1sfzhcc-N/view?usp=drive_link" target="_blank">Cocktails & Finger Food</a></li>
                  <li><a class="dropdown-item text-white" href="https://drive.google.com/file/d/1-llGq5Z-yvUNopxPMS90HlPpDyMAaixB/view?usp=drive_link" target="_blank">Coffee Break</a></li>
              </ul>
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

<script src="{{ asset('js/jquery.jcarousel.min.js') }}" ></script>
<script src="{{ asset('js/jcarousel.responsive.js') }}" ></script>
<script src="{{ asset('js/bootstrap-swipe-carousel.min.js') }}" ></script>
<script src="{{ asset('js/jquery.jcarousel-swipe.min.js') }}" ></script>

<script>

  $('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if (target.length) { event.preventDefault();
      $('html, body').stop().animate({ scrollTop: target.offset().top - 100 }, 1000); }
    });
    
</script>
  
</body>

@yield('page-js-script')

</html>
