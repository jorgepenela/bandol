<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Nos esmeramos para que te sientas en un ambiente  cálido y disfrutes de un momento especial deleitando desayunos, almuerzos delicados y patisserie casera.">
    <meta name="author" content="">    
    <meta name="keywords" content="restaurant, restaurante, buenos aires, capital federal, comida, delivery, vinos, tragos, mediterraneo, Patisserie ">

    <title>Bandol Restaurante Mediterraneo - Patisserie -</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link href="css/style.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-left">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
            	<a class="navbar-brand navbar-logo navbar-logo-xs" href="index.html"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<a class="logo" href="index.html">
										<img src="img/logo.png" alt="Bandol Bar">
									</a>
              <ul class="nav navbar-nav navbar-right">								
								<li><a class="toplink" href="#carousel-example-generic">INICIO</a></li>
								<li><a class="toplink" href="#takeaway">CARTA</a></li>
								<li><a class="toplink" href="#nosotros">NOSOTROS</a></li>
								<li><a class="toplink" href="#contacto">RESERVAS</a></li>
								<li><a class="toplink" href="#mapa">UBICACIÓN</a></li>
								<li class="nav-redes">
										<ul class="nav-redes-ul">
											<li><a href="#" class="ic-redes ic-ig"></a></li>
											<li><a href="#" class="ic-redes ic-fb"></a></li>
											<li><a href="#" class="ic-redes ic-mp"></a></li>
					   			</ul>
					   		</li>
            	</ul>
            	<ul class="carousel-info">
			      		<li><span class="text-car">Lunes a Domingos de 8 a 21hs</span><span class="ic-carousel hidden ic-clock"></span></li>
			      		<li><span class="text-car">Av. Comodoro Martín Rivadavia 1696<br>Cdad. Autónoma de Buenos Aires</span><span class="ic-carousel hidden ic-map"></span></li>
			      		<li><a href="mailto:bandol@bandolbar.com" target="_blank"><span class="text-car">bandol@bandolbar.com</span><span class="ic-carousel hidden ic-mail"></span></a></li>
			      		<li><a href="tel:+541147046342"><span class="text-car">011 4704-6342</span><span class="ic-carousel hidden ic-phone"></span></a></li>
			      	</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div class="container">	 
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	
      	<ul class="carousel-tabs col-md-4">
      		<li class="carousel-tabs-li"><a href="#takeaway" class="toplink"><span class="ic-tabs ic-takeaway"></span><span class="text-tabs">Takeaway</span></a></li>
      		<li class="carousel-tabs-li"><a href="#mapa" class="toplink"><span class="ic-tabs ic-mapa"></span><span class="text-tabs">Ubicación</span></a></li>
      	</ul>
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        	<div class="item active">
            <span class="item-img-3"></span>
          </div>
          <div class="item ">          	
            <span class="item-img-1"></span>
          </div>
          <div class="item">
            <span class="item-img-2"></span>
          </div>          
          <div class="item">
            <span class="item-img-4"></span>
          </div>
          <div class="item">
            <span class="item-img-5"></span>
          </div>
        </div>
      </div>			

      <section class="takeaway" id="takeaway">
      	<!-- FORMULARIO GETAWAY -->	
				<form action="procesar-envios.php" method="POST">

      	<div class="row">
      		<div class="col-xs-4 col-md-4 bg-takeaway"></div>
      		<div class="col-xs-8 col-md-8 pull-right col-takeaway">
      			<h1 class="title-col-md-8">Carta-Takeaway</h1>
      			<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#desayuno">Desayunos Meriendas</a></li>
				  <li><a data-toggle="tab" href="#cafeteria">Patisserie Cafetería</a></li>
				  <li><a data-toggle="tab" href="#licuados">Licuados Smoothies</a></li>
				  <li><a data-toggle="tab" href="#wraps">Wraps Sandwiches</a></li>
				  <li><a data-toggle="tab" href="#mediodia">Menú del Mediodía</a></li>
				  <li class="tab-width"><a data-toggle="tab" href="#tablitas">Tablitas Tartas Ensaladas</a></li>
				  <li><a data-toggle="tab" href="#vinos">Vinos</a></li>
				  <li><a data-toggle="tab" href="#tragos">Tragos Bebidas</a></li>
				</ul>


				<div class="tab-content">									
				<!-- DESAYUNO -->
				  <div id="desayuno" class="tab-pane fade in active">
				    <?php include('desayunos.php'); ?>				    
				  </div><!-- desayuno -->

				  <!-- CAFETERIA -->
				  <div id="cafeteria" class="tab-pane fade">
				  	<?php include('cafeteria.php'); ?>
				  </div>
				  <!-- LICUADOS -->
				  <div id="licuados" class="tab-pane fade">
				    <?php include('licuados.php'); ?>						
				  </div>
				  <!-- WRAPS -->
				  <div id="wraps" class="tab-pane fade">
				    <?php include('wraps.php'); ?>					
				  </div>
				  <!-- MEDIODIA -->
				  <div id="mediodia" class="tab-pane fade">
				  	<?php include('mediodia.php'); ?>					
				  </div>
				  <!-- 	TABLITAS -->
				  <div id="tablitas" class="tab-pane fade">
				    <?php include('tablitas.php'); ?>
				  </div>
				  <!-- VINOS -->
				  <div id="vinos" class="tab-pane fade">
				   	<?php include('vinos.php'); ?>
				  </div>
				  <!-- TRAGOS -->
				  <div id="tragos" class="tab-pane fade">				    
						<?php include('bebidas.php') ?>
				  </div>
				</div>
      		</div>
      		<div class="col-xs-8 col-md-8 pull-right col-takeaway">
      			
      			<!-- FORMULARIO  -->
						<div class="form-inline bottom-takeaway ">
							<div class="form-group">
								<input type="text" class="form-control" id="nombre-takeaway" name="nombre-takeaway" placeholder="Tu nombre*" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="direccion-takeaway" name="email-takeaway" placeholder="Email*" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="telefono-takeaway" name="telefono-takeaway" placeholder="Tel&eacute;fono" required="">
							</div>
							<!-- Fecha y hora -->
							<input id="date" type="hidden" name="fecha y hora" value="
								<?php
								@$fecha = date("Y-m-d H:i:s",time());
								$date = new DateTime($fecha, new DateTimeZone('America/Argentina/Buenos_Aires'));
								date_default_timezone_set('America/Argentina/Buenos_Aires');
								$zonahoraria = date_default_timezone_get();
								@$fecha=date("Y-m-d H:i:s",time());
								echo $fecha;
								// nota: debes colocar @ antes de la variable para "Ocultar" el error que te marca.
								?>
							"/>
							<button type="submit" class="btn btn-default btn-takeaway">take away</button>						  						
							<br>
							<strong>¡Pedí lo que quieras y pasalo a buscar!</strong>
						</div>
						
      		</div>
      	</div>
      	</form>	<!-- FORMULARIO GETAWAY -->	
      </section>
      <section id="nosotros" class="nosotros">
      	<div class="row">
      		<div class="col-xs-4 col-md-4 bg-nosotros"></div>
      		<div class="col-xs-8 col-md-8 pull-right col-takeaway">
      			<h2 class="title-col-md-8">Nosotros</h2>
      			<div class="row">
      				<div class="col-md-6">      					
      					<p class="nosotros-p">
      						Bandol es un pequeño poblado de pescadores de la Costa Azul Francesa e inspiración de nuestros sabores de impronta mediterránea.
								</p>		
								<p class="nosotros-p">
									Nos esmeramos para que te sientas en un ambiente relajado, cálido y puedas disfrutar de un momento especial deleitando nuestros variados desayunos, almuerzos delicados y patisserie casera.
      					</p>

      					<div class="galeria">
      						<h4>Galería</h4>
									<a href="img/gal/1.jpg" style="background-image: url(img/gal/1.jpg)" data-lightbox="roadtrip">Image #2</a>
									<a href="img/gal/2.jpg" style="background-image: url(img/gal/2.jpg)" data-lightbox="roadtrip">Image #3</a>
									<a href="img/gal/3.jpg" style="background-image: url(img/gal/3.jpg)" data-lightbox="roadtrip">Image #4</a>
									<a href="img/gal/4.jpg" style="background-image: url(img/gal/4.jpg)" data-lightbox="roadtrip">Image #2</a>
									<a href="img/gal/5.jpg" style="background-image: url(img/gal/5.jpg)" data-lightbox="roadtrip">Image #3</a>
									<a href="img/gal/6.jpg" style="background-image: url(img/gal/6.jpg)" data-lightbox="roadtrip">Image #4</a>																	
									<a href="img/gal/3.jpg" class="hidden" data-lightbox="roadtrip">Image #4</a>
									<a href="img/gal/4.jpg" class="hidden" data-lightbox="roadtrip">Image #2</a>
									<a href="img/gal/5.jpg" class="hidden" data-lightbox="roadtrip">Image #3</a>
									<a href="img/gal/6.jpg" class="hidden" data-lightbox="roadtrip">Image #4</a>																	
      				</div>
      				</div>      				
      				<div class="col-xs-12 col-md-4 pull-right">
      					<ul class="nosotros-ul">
      						<li class="nosotros-li"><div class="ic-wifi"></div><span>Wifi</span></li>
      						<li class="nosotros-li"><div class="ic-takeaway-b"></div><span>Takeaway</span></li>
      						<li class="nosotros-li"><div class="ic-payment"></div><span>Diferentes medios de pago</span></li>
      					</ul>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      <section id="contacto" class="contacto">
      	<div class="row">
      		<div class="col-xs-4 col-md-4 bg-contacto"></div>
      		<div class="col-xs-8 col-md-8 pull-right col-takeaway">
      			<h2 class="title-col-md-8">Reservas</h2>
      			<div class="row">
      				<div class="col-md-5">      					
      					<form action="procesar-contacto.php" method="POST" class="form-contacto">
                      <div class="form-group">
                           <input name="nombre" type="text" class="form-control contacto-input" id="name" placeholder="Nombre*" required>
                      </div>
                      <div class="form-group">
                          <input name="email" type="email" class="form-control contacto-input" id="email" placeholder="Mail*" required>
                      </div>
                      <div class="form-group">
                          <input name="telefono" type="tel" class="form-control contacto-input" id="phone" placeholder="Tel&eacute;fono*" required>
                      </div>
                      <div class="form-group">
                          <label for="message">Consulta*</label>
                          <textarea name="consulta" class="form-control contacto-textarea" id="message" required></textarea>
                      </div>
                  <div class="clearfix"></div>
                  <div class="pull-right">
                      <button type="submit" class="btn btn-xl btn-takeaway">ENVIAR</button>
                  </div>
              </form>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      <section id="mapa" class="section-mapa">
      	<div class="blockmap"></div>
      	<div class="row">
      		<div class="col-md-12 padding">
      			<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.43896343975!2d-58.465843284772!3d-34.5424395804754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb69fef3d7717%3A0xb21538f02a3c6069!2sBandol!5e0!3m2!1ses-419!2sar!4v1492197165874" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      			<div class="ruz">
      				<p class="pull-left">Copyright © 2017 Bandol</p>
      				<a class="pull-right" href="#">Design by Ruz Estudio</a>
      			</div>
      		</div>
      	</div>      	
      </section>
	</div>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/w3data.js"></script> 
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script>-->
    <script src="js/lightbox.min.js"></script>    
    <script src="js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
