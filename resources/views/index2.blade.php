<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Eksacomercial</title>
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

      .w-35{
        width:35%!important
      }
    </style>

  </head>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BZ1ZBWGS6D"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-BZ1ZBWGS6D');
    </script>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="."><img class="d-block" src="{{ url('images/eksa.png') }}" style="width: 157px; height: 88px;"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="ml-auto navbar-nav nav">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#nosotros-section" class="nav-link"><span>Nosotros</span></a></li>
	          <li class="nav-item"><a href="#servicios-section" class="nav-link"><span>Utilidades</span></a></li>
	          <li class="nav-item"><a href="#cilindros-section" class="nav-link"><span>Servicios</span></a></li>
	          {{-- <li class="nav-item"><a href="#insumos-section" class="nav-link"><span>Insumos</span></a></li> --}}
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contacto</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section class="hero-wrap">
      <div class="overlay"></div>
    </section>

    <!-- Home Section -->
    <section class="ftco-about img ftco-section" id="home-section">
      <img class="d-block w-100" src="{{ url('images/imagen-letrero-fachada.png') }}" alt="First slide">
    	<div class="container text-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <!--//
            <div class="carousel-item active">
              <center>{{-- Oxigeno --}}
                <img class="d-block w-100" src="{{ url('images/imagen-letrero-fachada.png') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                 {{-- <h5 class="font-weight-bold">Prueba de visualización 1</h5> --}}
                </div>
              </center>
            </div>
            //-->

            <div class="carousel-item active">
              <center>{{-- Oxigeno --}}
                <img class="d-block w-35" src="{{ url('images/image1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <!--// <h5 class="font-weight-bold">Prueba de visualización 1</h5> //-->
                </div>
              </center>
            </div>
            <div class="carousel-item">
              <center>{{-- Acetileno --}}
                <img class="d-block w-35" src="{{ url('images/image2.jpg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <!--// <h5 class="font-weight-bold">Prueba de visualización 2</h5> //-->
                </div>
              </center>
            </div>
            <!--
            <div class="carousel-item">
              <center>
                <img class="d-block w-35" src="{{ url('images/image3.jpg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold">Prueba de visualización 3</h5>
                </div>
              </center>
            </div>
          -->
            <div class="carousel-item">
              <center>{{-- Nitrogeno --}}
                <img class="d-block w-35" src="{{ url('images/image4.jpg') }}" alt="Four slide">
                <div class="carousel-caption d-none d-md-block">
                  <!--// <h5 class="font-weight-bold">Prueba de visualización 4</h5> //-->
                </div>
              </center>
            </div>
            <div class="carousel-item">
              <center>{{-- Argon --}}
                <img class="d-block w-35" src="{{ url('images/image5.jpg') }}" alt="Five slide">
                <div class="carousel-caption d-none d-md-block">
                  <!--// <h5 class="font-weight-bold">Prueba de visualización 5</h5> //-->
                </div>
              </center>
            </div>
            <div class="carousel-item">
              <center>{{-- Dioxido de carbono --}}
                <img class="d-block w-35" src="{{ url('images/image6.jpg') }}" alt="Six slide">
                <div class="carousel-caption d-none d-md-block">
                  <!--// <h5 class="font-weight-bold">Prueba de visualización 6</h5> //-->
                </div>
              </center>
            </div>
            <!--
            <div class="carousel-item">
              <center>
                <img class="d-block w-35" src="{{ url('images/image7.jpg') }}" alt="Six slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="font-weight-bold">Prueba de visualización 7</h5>
                </div>
              </center>
            </div>
            -->

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>Ant
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>Sig
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
    	</div>
    </section>

    <!-- Nosotros Section -->
    <section class="ftco-about img ftco-section" id="nosotros-section" style="top: -100px;">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/imagen_nosotros.png);"></div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
    				<div class="pb-3 row justify-content-start">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Nosotros</h2>
		            <p>Eksacomercial fue creada principalmente para poder distribuir y entregar de gases industriales o medicinales a las empresas de nuestro país, de una forma segura y rápida. Llevamos en el mercado más de 10 años a disposición de nuestros clientes. Nuestros clientes nos prefieren gracias a nuestro equipo de personas que realizan su labor de forma rápida y puntual.</p>
		            <div class="text-about">
		            	<h4>Nuestra misión</h4>
			            <p>Ser una de las empresas de gases industriales más segura, más diversa y rentable del país, con esta meta a seguir, seguiremos entregando con excelencia nuestros servicios a todos nuestros clientes</p>
			            <!--
                  <h4>Read On Any Devices</h4>
			            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			            <h4>Very High Resolution</h4>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  -->
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <!-- Servicios Section -->
    <section class="ftco-section ftco-no-pt" id="servicios-section" style="top: -100px;">
    	<div class="container">
    		<div class="py-5 mt-5 row justify-content-center">
          <div class="text-center col-md-5 heading-section ftco-animate">
            <h2 class="mb-4">Utilidades</h2>
          </div>
        </div>
    		<div class="row">
					<div class="text-center col-md-4 d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-user-experience"></i>
							</span>
							<div class="desc">
                <h3 class="mb-5">Gases Industriales</h3>
								<p>Los gases industriales son un grupo de gases, manufacturados que se comercializan con usos en diversas aplicaciones.</p>
                <p>Principalmente son empleados en procesos industriales, tales como la fabricación de acero, aplicaciones médicas, fertilizantes, semiconductores, etc.</p>
                <p>Pueden ser a la vez orgánicos e inorgánicos y se obtienen del aire mediante un proceso de separación o producidos por síntesis química.</p>
                <p>Pueden tomar distintas formas como comprimidos, en estado líquido, o sólido.</p>
							</div>
						</div>
					</div>
					<div class="text-center col-md-4 d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-network"></i>
							</span>
							<div class="desc">
                <h3 class="mb-5">Gases Medicinales</h3>
								<p>Los gases medicinales son aquellos gases que por sus características específicas son utilizados para consumo humano y aplicaciones medicinales en instituciones de salud y en forma particular.</p>
                <p>Los gases medicinales son almacenados y se suministran como gases comprimidos y también como líquidos criogénicos (tal es el caso del Oxígeno líquido).</p>
                <p>Los cilindros (tubos) de acero, aleaciones de acero-carbono y aluminio, son empleados regularmente para almacenamiento en estado gaseoso; para los estados líquidos se utilizan termos criogénicos y, en los casos de elevados consumos, los tanques criogénicos fijos son empleados para el almacenamiento.</p>

							</div>
						</div>
					</div>
					<div class="text-center col-md-4 d-flex ftco-animate">
						<div class="services-1 bg-light">
							<span class="icon">
								<i class="flaticon-innovation"></i>
							</span>
							<div class="desc">
                <h3 class="mb-5">Insumos</h3>
								<p>Los insumos se caracterizan por ser productos acabados que sirven para crear otros elementos. Los insumos son elementos que se usan frecuentemente en el área de producción y generalmente tienen que ser reemplazados o repuestos constantemente.</p>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <!-- Detalle Colindros Section -->
    <section class="ftco-section ftco-no-pb ftco-no-pt" id="cilindros-section" style="top: -100px;">
    	<div class="container">
    		<div class="py-5 mt-5 row justify-content-center">
          <div class="text-center col-md-12 heading-section ftco-animate">
            <h2 class="mb-4">Nuestros Servicios Disponibles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="mb-4 col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Acuícola</a></li>
					      <li><a href="#page-2">Alimentos</a></li>
					      <li><a href="#page-3">Científico</a></li>
					      <li><a href="#page-4">Metalmecánica</a></li>
					      <li><a href="#page-5">Procesos Industriales</a></li>
					      <li><a href="#page-6">Salud</a></li>
					      <li><a href="#page-7">Vitivinícola</a></li>
                <!--//
					      <li><a href="#page-7">Epilogue</a></li>
					      <li><a href="#page-8">Epigraph</a></li>
                //-->
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page bg-light one">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/acuicola_001.jpg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Acuícola</h2>
                      <p style="font-size: 12px;">Los gases son muy importantes para la Oxigenación en mar para emergencia o permanente, Oxigenación en lagos permanente, emergencia y/o para tratamientos, Monitoreo y/o Control de Oxígeno Disuelto, Ingeniería Básica y asesoría nuevos proyectos de uso de gases.</p>
                      <!--//
                      <h2 class="heading">Uso</h2>
                      <p style="font-size: 12px;">
                        <ul style="font-size: 12px;">
                          Oxígeno Medicinal
                          <li>Apto para el uso humano</li>
                          <li>Soporte respiratorio</li>
                        </ul>
                        <ul style="font-size: 12px;">
                          Oxígeno Industrial
                          <li>No apto para el uso humano</li>
                          <li>Oxícorte de metáles</li>
                          <li>Soldaduras en mezcla con acetileno</li>
                        </ul>
                      </p>
                      //-->
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-2" class= "page bg-light two">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/alimentos_001.jpeg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Alimentos</h2>
                      <p style="font-size: 12px;">Los gases son muy importantes para las atmósferas controladas y modificadas -en bolsas unitarias y contenedores- preservan y extienden la calidad y vida útil de estos alimentos.</p>
                      <p style="font-size: 12px;">Las actuales tendencias de alimentación junto con la normativa mundial, incorporan cada vez más tratamientos naturales y promueven el uso de gases.</p>
                      <!--//
                      <h2 class="heading">Uso</h2>
                      <p style="font-size: 12px;">
                        <ul style="font-size: 12px;">
                          <li>Soldadura en mezcla con oxígeno</li>
                        </ul>
                      </p>
                      //-->
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-3" class= "page bg-light three">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/cientifico_001.jpeg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Científico</h2>
                      <p style="font-size: 12px;">Los gases son muy importantes para la investigación, el uso de estos gases especiales dentro del área de laboratorios y otros.</p>
                      <!--//
                      <h2 class="heading">Uso</h2>
                      <p style="font-size: 12px;">
                        <ul style="font-size: 12px;">
                          <li>Industria Alimentaria</li>
                          <li>Industria Química</li>
                          <li>Industria del gas y el petróleo</li>
                          <li>Industria aeroespacial</li>
                          <li>Industria siderometalúrgica</li>
                          <li>Industria automotríz</li>
                        </ul>
                      </p>
                      //-->
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-4" class= "page bg-light four">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/metalmecanica_001.jpg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Metalmecánica</h2>
                      <p style="font-size: 12px;">Los gases son utilizados en soluciones integrales, servicio técnico industrial, también para uso de procesos de Oxicorte.</p>
                      <!--//
                      <h2 class="heading">Uso</h2>
                      <p style="font-size: 12px;">
                        <ul style="font-size: 12px;">
                          <li>Soldaduras</li>
                          <li>Creación de atmósferas inertes</li>
                        </ul>
                      </p>
                      //-->
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-5" class= "page bg-light five">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/industriales_001.jpeg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Procesos Industriales</h2>
                      <p style="font-size: 12px;">Los gases que son utilizados para aplicaciones dentro de la industria petroquimica, gases como el nitrógeno liquido, también para soplados de plásticos y criomolienda.</p>
                      <!--//
                      <h2 class="heading">Uso</h2>
                      <p style="font-size: 12px;">
                        <ul style="font-size: 12px;">
                          <li>Producción de cerveza</li>
                          <li>Producción de aspirinas</li>
                          <li>Fabricación de combustibles</li>
                          <li>Conservación de leche</li>
                          <li>Producción del cemento</li>
                          <li>Apagar incendios</li>
                        </ul>
                      </p>
                      //-->
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-6" class= "page bg-light six">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/salud_001.jpg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Salud</h2>
                      <p style="font-size: 12px;">Los gases son muy importantes para las personas que ingresan a áreas de salud, estos gases medicinales sirven para dar vida y es indispensable para la combustión. También son utilizados en servicios técnicos productos médicos.</p>
                    </div>
                  </div>
                </div>
              </div>
					  </div>

					  <div id="page-7" class= "page bg-light seven">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/servicios/vitivinicola_002.jpg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Vitivinícola</h2>
                      <p style="font-size: 12px;">Los gases son muy importantes al momento de mantener el vino y mosto protegido del oxigeno, y evitar los procesos de oxidación del vino y mosto. Mantener niveles bajos de OD (oxigeno disuelto). Evitar pérdida de color y aroma del vino.</p>
                    </div>
                  </div>
                </div>
              </div>
					  </div>

            <!--//

					  <div id="page-8" class= "page bg-light eight">
              <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                  <div class="img-about img d-flex align-items-stretch">
                    <img class="img d-flex align-self-stretch align-items-center w-100" src="{{ url('images/image1.jpg') }}" alt="Cilindro Oxígeno">
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5">
                  <div class="pb-3 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                      <h2 class="heading">Oxígeno</h2>
                      <p>Un cilindro de oxígeno (también llamado tanque de oxígeno, bala de oxígeno o botella de oxígeno) es un recipiente de almacenaje de dioxígeno, tanto bajo presión en cilindros de gas o como oxígeno líquido en tanques de almacenaje criogénicos.</p>
                    </div>
                  </div>
                </div>
              </div>
					  </div>
            //-->

					</div>
			  </div>
    	</div>
    </section>

    <!-- Insumo Secttion -->
    <!--//
    <section class="ftco-section testimony-section ftco-no-pb" id="insumos-section" style="top: -100px; border: 1px solid navy;">
    	{{-- <div class="border img img-bg" style="background-image: url(images/bg_4.jpg);"></div> --}}
    	<div class="overlay"></div>
      <div class="container">
        <div class="mb-5 row justify-content-center">
          <div class="text-center col-md-12 heading-section heading-section-black ftco-animate">
            <h2 class="mb-4">Insumos</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="py-4 testimony-wrap">
                	{{-- <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div> --}}
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="py-4 testimony-wrap">
                	{{-- <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div> --}}
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="py-4 testimony-wrap">
                	{{-- <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div> --}}
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="py-4 testimony-wrap">
                	{{-- <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div> --}}
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="py-4 testimony-wrap">
                	{{-- <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div> --}}
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    //-->

    <!-- Contacto Section -->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section" style="top: -100px;">
      <div class="container">

      	<div class="pb-3 mb-5 row justify-content-center">
          <div class="text-center col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Contáctame</h2>
            <p>Estamos esperando tu correo electrónico y llamado telefónico, tenemos lo que necesitas en gases industriales, medicinales e insumos para nuestros productos.</p>
          </div>
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
                  <!-- <option value="talca">Sucursal Talca</option> -->
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
        </div>
        <br><br>

        <div class="mb-5 row d-flex contact-info">

          <div class="col-md-12 col-lg-12 pb-3 mb-5 row justify-content-center">
            <div class="text-center col-md-7 heading-section ftco-animate">
              <h2 class="mb-4">Dónde ubicarnos</h2>
            </div>
          </div>

          <div class="col-md-12 col-lg-4 d-flex ftco-animate">
            <div class="p-4 text-center align-self-stretch box bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div>
                <h3 class="mb-4">Contacto 1</h3>
                <p class="font-weight-bold"><h2>Santiago</h2></p>
                <p>Las Araucarias 9080, Quilicura</p>
                <p>Teléfono: +56 9 7275 7988</p>
                <!--// <p>Teléfono 2: +56 9 7884 0118</p> //-->
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
          <!--/
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


        <div class="container text-center">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="pb-3 mb-5 row justify-content-center">
                  <div class="text-center col-md-7 heading-section ftco-animate">
                    <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.9379868086144!2d-70.71573104851738!3d-33.34656988070955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c7f0e4be68ad%3A0x8e5afb3cc8550aad!2sLas%20Araucarias%209080%2C%20Quilicura%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1646488792949!5m2!1ses-419!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>Ant
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>Sig
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
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
