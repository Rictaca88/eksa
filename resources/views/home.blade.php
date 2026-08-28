<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EKSAComercial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <style>
      .map-responsive{
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
      }
      .map-responsive iframe{
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
      }
    </style>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- Contacto Section -->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section" style="top: -100px;">
      <div class="container">

      	<div class="pb-3 mb-5 row justify-content-center">
          <div class="text-center col-md-7 heading-section ftco-animate">

            <div class="icon d-flex align-items-center justify-content-center">
              <img src="{{ url('img/eksa.png') }}" class="margin: 0 auto;" style="width: 300px; heigth: 300px;" />
            </div>

            <h2 class="mb-4">Contáctame</h2>
            <p>Estamos esperando tu correo electrónico y llamado telefónico, tenemos lo que necesitas en gases industriales, medicinales e insumos para nuestros productos.</p>
          </div>
        </div>

        <div class="mb-5 row d-flex contact-info">

          <div class="col-md-12 col-lg-4 d-flex ftco-animate">
            <div class="p-4 text-center align-self-stretch box bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div>
                <h3 class="mb-4">Contacto 1</h3>
                <p class="font-weight-bold"><h2>Santiago</h2></p>
                <p>Las Araucarias 9080, Quilicura</p>
                <p>Teléfono 1:<br> +56 9 7275 7988</p>
                <p>Teléfono 2:<br> +56 9 7884 0118</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-4 d-flex ftco-animate">
            <div class="p-4 text-center align-self-stretch box bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div>
                <h3 class="mb-4">Contacto 2</h3>
                <p class="font-weight-bold"><h2>San Antonio</h2></p>
                <p>Teléfono:<br> +56 9 7275 7988</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-4 d-flex ftco-animate">
            <div class="p-4 text-center align-self-stretch box bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div>
                <h3 class="mb-4">Contacto 3</h3>
                <p class="font-weight-bold"><h2>San Felipe</h2></p>
                <p>Teléfono:<br> +56 9 7275 2830</p>
              </div>
            </div>
          </div>

          <!--//
          <div class="col-md-12 col-lg-3 d-flex ftco-animate">
            <div class="p-4 text-center align-self-stretch box bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div>
                <h3 class="mb-4">Contacto 4</h3>
                <p class="font-weight-bold"><h2>Talca</h2></p>
                <p>Teléfono:<br> +56 9 7175 2830</p>
              </div>
            </div>
          </div>
          //-->
        </div>

        <div class="mb-5 row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="{{ route('contacto') }}" method="POST" class="p-4 bg-light p-md-5 contact-form">
              <h2 class="mb-4">Contacto vía correo</h2>
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Apellido *">
              </div>
              <div class="form-group">
                <input type="text" name="empresa" class="form-control" placeholder="Nombre de Empresa *">
              </div>
              <div class="form-group">
                <input type="text" name="fono" class="form-control" placeholder="Teléfono *">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email *">
              </div>
              <div class="form-group">
                <select name="sucursal" id="sucursal" class="form-control" >
                  <option value="santiago" selected>Sucursal Santiago</option>
                  <option value="san antonio">Sucursal San Antonio</option>
                  <option value="san felipe">Sucursal San Felipe</option>
                  <option value="talca">Sucursal Talca</option>
                </select>
              </div>
              <div class="form-group">
                <select name="asunto" id="asunto" class="form-control" >
                  <option value="cotización" selected>Cotización</option>
                  <option value="consulta">Consulta</option>
                </select>
              </div>
              <div class="form-group">
                <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control" placeholder="Mensaje *"></textarea>
              </div>
              <div class="row align-items-center">
                <div class="col text-left">
                  <div class="form-group">
                    <input type="submit" value="Envio Mensaje" class="px-5 py-3 btn btn-primary">
                  </div>
                </div>
                <div class="col text-right">
                  * Datos obligatorios.
                </div>
              </div>

              @csrf

            </form>
          </div>
          <br>
        </div>

      </div>
    </section>

    <footer class="ftco-footer ftco-section" style="padding:15px;">
      <div class="container">
        <div class="row">
          <div class="text-center col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            Todos los derechos reservados
            <!-- | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('js/scrollax.min.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>

  <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ url('js/google-map.js') }}"></script>
  -->

  </body>
</html>
