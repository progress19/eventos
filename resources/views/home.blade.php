<? use App\Fun; ?>

@extends('layouts.frontLayout.front')
@section('title', 'Home')    
@section('content')

<section id="salones">
    <div class="container-fluid" style="background-color: white;">
        <div class="col-md-12 text-center titulo">
            <h1>CONTAMOS CON 12 SALONES PREMIUM PARA EVENTOS CORPORATIVOS Y SOCIALES</h1>
        </div>
    </div>
    
    <div class="clearfix"></div>  

    <div id="transcroller-body" class="aos-all">
        <? $i = 0; $delay = 100; ?>
        @foreach ($salones as $salon)
            <div class="aos-item" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
              <div class="aos-item__inner pswp__item">
                <a href="https://player.vimeo.com/video/{{ $salon }}?autoplay=1&loop=1&autopause=0" id="{{ $i }}" caption="{{ Fun::getBtnPresentacionSalon($i) }}" title="{{ Fun::getTitleSalon( $i ) }}" data-rel="lightcase:myCollection:slideshow{{$i}}">
                  <img class="img-fluid overlay" style="display: block;" src="{{ asset('images/salones/'.$i.'.jpg') }}" alt="">
                  <div class="{{ $i }} nombre-salon">{{ Fun::getTitleSalon( $i ) }}</div>
                </a>
              </div>
            </div>
            <?php $i++; $delay = $delay + 100; ?> 
        @endforeach
    </div>
 
    <div class="clearfix"></div>
  
</section>

<section id="servicios">
  <div class="container">
      <h1 data-aos="fade">SERVICIOS PERSONALIZADOS</h1>  
      <p data-aos="fade">Somos una empresa líder en organización de eventos empresariales con más de 40 años de experiencia en el mercado. Con 12 salones premium, ofrecemos una amplia variedad de opciones para cocktails, coffee breaks, almuerzos, cenas, reuniones, cumpleaños, exposiciones, seminarios, filmaciones, cumpleaños, book de fotos, eventos de fin de año, presentaciones en teatro y mucho más.</p>  
      <p data-aos="fade">Nuestro staff permanente de profesionales lo asesorarán y brindaran todo su conocimiento para hacer de su evento un gran éxito.</p>
  </div>
</section>

<section id="cocktails" data-aos="fade" class="back-cocktails">
    <div class="col-auto text-center" data-aos="zoom-in">
        <a href="{{ asset('images/cocktails/1.jpg') }}" class="overlay" data-rel="lightcase-cocktails:myCollection:slideshowa">
           <button type="submit" class="btn btn-primary mb-3">COCKTAILS & TRAGOS</button>
        </a>
        @for ($i = 2; $i < 24; $i++)
            <a href="{{ asset('images/cocktails/'.$i.'.jpg') }}" class="overlay" data-rel="lightcase-cocktails:myCollection:slideshowa"></a>
        @endfor
    </div>
</section>

<section id="catering" data-aos="fade" class="back-catering">
    <div class="col-auto text-center" data-aos="zoom-in">
        <a href="{{ asset('images/catering/1.jpg') }}" class="overlay" data-rel="lightcase-catering:myCollection:slideshowb">
            <button type="submit" class="btn btn-primary mb-3">CATERING PROPIO</button>
        </a>
        @for ($i = 2; $i < 18; $i++)
            <a href="{{ asset('images/catering/'.$i.'.jpg') }}" class="overlay" data-rel="lightcase-catering:myCollection:slideshowb"></a>
        @endfor
    </div>
</section>
    
<section id="galeria">
    <div class="container">
        <div class="col-md-12 text-center titulo">
            <h1>SEA UN INVITADO MÁS. NOSOTROS NOS OCUPAMOS DE TODO</h1>
        </div>
    </div>
    <div id="transcroller-body" class="aos-all">
        <? $delay = 100; ?>
        @for ($i = 1; $i < 17; $i++)
            <div class="aos-item-2" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
                <a href="{{ asset('images/galeria/'.$i.'.jpg') }}" class="overlay" data-rel="lightcase:myCollection:slideshowc">
                  <img class="img-fluid" style="display: block;" src="{{ asset('images/galeria/'.$i.'.jpg') }}" alt="">
                </a>
            </div>
            <?php $delay = $delay + 100; ?> 
        @endfor
    </div>
</section>

<div class="clearfix"></div>

<section id="contacto" style="background:url(images/EventosSanTelmo.jpg);">
    <div class="container">
        <div class="col-md-12 text-center titulo">
            <h1>CONTACTO</h1>
        </div>
        <div class="row">
            <div class="col-md-6 left-contacto">
                <div id="responseContacto"></div>
                <form id="frmContacto">
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="nombre_f" name="nombre" placeholder="NOMBRE">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="apellido_f" name="apellido" placeholder="APELLIDO">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="whatsapp_f" name="whatsapp" placeholder="WHATSAPP">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="email_f" name="email" placeholder="EMAIL">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="comentario_f" name="comentario" rows="3" placeholder="COMENTARIO"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3 float-end">ENVIAR</button>
                    </div>
                    <input type="hidden"  id="baseUrl" value="{{ url('/') }}" >
                </form>    
            </div>

            <!-- right -->

            <div class="col-md-6">
                <img class="img-fluid logo-footer" style="display: block;" src="{{ asset('images/eventos-bsas-footer.svg') }}" alt=""> 
                <p>Av. Belgrano 312 - Entrepiso - CABA</p>
                <p><i class="fa-brands fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5491168759015">(+54911) 6875-9015</a></p> 
                <p><a href="mailto:info@eventosbsas.com">info@eventosbsas.com</a></p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('page-js-script')

<script type="text/javascript">


    AOS.init({
      easing: 'ease-in-cubic',
      once: true,
      delay: 1000,
    });
  
    jQuery(document).ready(function($) {

      $('a[data-rel^=lightcase]').lightcase({
        swipe: true,
        transition: 'scrollHorizontal',
        speedIn: 400,
        showSequenceInfo: false,
      });

    });

  </script>

  <script>
      
$(document).ready(function() {

    /* FORM CONTACTO */

    $("#mensaje").hide();

        $("#frmContacto").validate({
            event: "blur",
            rules: {'nombre': "required",'email': "required email",'comentario': "required"},
            messages: {
                'nombre': 'Por favor, complete el campo.',
                'email': 'Por favor, complete el campo.',
                'comentario': 'Por favor, complete el campo.' 
            },
            debug: true,errorElement: "label",
            submitHandler: function(form){

            /*
                if (grecaptcha === undefined) {
                    alert('Recaptcha not defined'); 
                    return; 
                }

                var response = grecaptcha.getResponse();

                if (!response) {

                        grecaptcha.reset();
                        grecaptcha.execute();

                    //alert('Coud not get recaptcha response'); 
                    return; 
                } 
            */

                var baseUrl = document.getElementById('baseUrl').value;

                $("#frmContacto").hide();
                $("#responseContacto").show();
                $("#responseContacto").html("<div style='text-align:center'><div class='lds-ring'><div></div><div></div><div></div><div></div></div></div>");
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                })
                $.ajax({

                    url: baseUrl+"/enviarContacto",
                    method: "post",
                    data: $('#frmContacto').serialize(),
                    success: function(msg){
                        $('#responseContacto').html(msg);
                    }
                });
            }
        });            

        });

  </script>

@stop

