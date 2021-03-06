<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Frente Amplio - te invitamos a construir</title>
        <meta name="description" content="<?php echo $descripcion_pagina; ?>">  <!-- pendiente texto -->
        <meta property="og:title" content="<?php echo $titulo_share; ?>" />  <!-- pendiente texto -->
        <meta property="og:description" content="<?php echo $descripcion_share; ?>" />  <!-- pendiente texto -->
        <meta property="og:image" content="http://www.frente-amplio.cl/img/frenteampliofacebook.png" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
        <meta property="og:url" content="http://www.frente-amplio.cl" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--        <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->   <!-- pendiente icono-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
			padding-top: 0px;
			padding-bottom: 20px;
            }
		</style>
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css?<?php echo $marca_corta; ?>">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
    <body lang="es">
        <!-- PENDIENTE Google Analytics-->
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-90687967-1', 'auto');
			ga('send', 'pageview');
		</script>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Estás usando un <strong>navegador muy antiguo</strong>. Por favor (y por tu propia seguridad) <a href="http://browsehappy.com/">actualiza tu navegador</a>.</p>
		<![endif]-->
		<div class="container">
			<div class="row encabezado">
				<div class="col-md-1 logo">
					<a href="?">
						<img src="img/logo.png" alt="Frente amplio" title="Frente amplio" />
					</a>
				</div>
				<div class="col-md-7 texto">
					<div class="hide">
						<h2>
							Frente Amplio
							<br>
							<small>TE INVITAMOS A CONSTRUIR</small>
						</h2>
					</div>
					
				</div>
				<div class="col-md-4 socialButtons">
					<p>
						<?php
							
							$host= "http://".$_SERVER["HTTP_HOST"];
							$uri= $_SERVER["REQUEST_URI"];
							$url = $host . $uri;
							// whatsapp y twitter
							$mensaje_compartir = 'Te invitamos a construir Frente Amplio ';
							$miuseragent=$_SERVER['HTTP_USER_AGENT']; //Busco el "userAgent" del usuario
							//lista de palabras del "userAgent" en los móviles
							$moviles=array("Mobile","iPhone","iPod","BlackBerry","Opera Mini","Sony","MOT","Nokia","samsung");
							$detector=0; //variable para detectar si el usuario utiliza un móvil (0=no, 1=si);
							$numMoviles=count($moviles); //número de palabras en la lista
							for ($i=0;$i<$numMoviles;$i++) { //comprobar en la lista ...
								$comprobar=strpos($miuseragent,$moviles[$i]);
								if ($comprobar!="") { //si detectamos un móvil ...
									$detector=1; //cambiamos la variable de detección.
								}
							}
							if ($detector==1) { //si es un móvil.
								$mensaje_compartir = $mensaje_compartir . $host;
							}
							
						?>
						<a class="twitter popup" href="http://twitter.com/share?text=<?php echo $mensaje_compartir; ?>">
							<img src="img/twitter.png" alt="twitter" />
						</a>
						
						<a class="facebook popup" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $host; ?>">
							<img  src="img/facebook.png"  alt="facebook" />
						</a>
						
						<a href="whatsapp://send?text=<?php echo $mensaje_compartir; ?>">
							<img  src="img/whatsapp.png"  alt="whatsapp" />
						</a>
					</p>
					<p>Comparte esta convocatoria.</p>
				</div>
			</div>
		</div>
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 visible-xs visible-sm">
					<h1 class="text-center">Súmate a la convocatoria</h1>
				</div>
				<div class="col-md-4">
					<div id="refactor" class="well">
						<h3 class="visible-md visible-lg">Súmate a la convocatoria</h3>
						<div class="message"></div>
						<form id="core-form" role="form" data-toggle="validator">
							<input type="hidden" name="enviar" value="1">
							<div class="form-group">
								<label for="nombres">Nombre:</label>
								<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Juan" data-error="Ingresa un nombre." required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<label for="apellidos">Apellidos:</label>
								<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Perez Peralta" data-error="Ingresa un apellido." required>
								<div lang="es" class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<label for="rut">Rut:</label>
								<input type="text" class="form-control" pattern="[0-9]{1,2}.[0-9]{3}.[0-9]{3}-[0-9Kk]{1}" id="rut" name="rut" placeholder="12.312.312-3" data-error="Ingresa un rut." required>
								<div class="help-block with-errors help-rut"></div>
							</div>
							<div class="form-group">
								<label for="email">Correo electrónico:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="jperez@correo.cl" data-error="Ingresa un correo valido." required>
								<div class="help-block with-errors"></div>
							</div>
							
							<div class="checkbox">
								<label><input type="checkbox" checked name="recibirMails" value="si"> Quiero recibir información sobre el Frente Amplio.</label>
								<div class="help-block with-errors"></div>
							</div>
							<button id="submit" type="submit" class="btn btn-success btn-lg btn-block">Firmar la convocatoria</button>
						</form>
						
					</div>
					<h4>
						<small>Los datos serán cuidadosamente resguardos y utilizados estrictamente para invitarte a participar en la conformación del frente amplio.</small>
					</h4>
					
				</div>
				
				<div class="col-md-8 content">
					<h1>Te invitamos a construir Frente Amplio</h1>
					<div class="textoConvocatoria">
						<p>Nuestro país se encuentra frente al agotamiento del proceso de más de 26 años en el que se ha impedido la expresión de la soberanía popular en las instituciones y en la toma de decisiones públicas, lo que se ha traducido en el predominio del gran empresariado en contra de los intereses de la mayoría social. Este proceso fue incapaz de crear las condiciones necesarias para avanzar hacia un país con una democracia plena, capaz a su vez de superar las enormes desigualdades existentes en distintos ámbitos de la vida, pero en particular en aquellos relacionados con los derechos más básicos de las chilenas y chilenos. Son 26 años de una creciente elitización del sistema político, cada vez más ajeno a las grandes mayorías nacionales. Esto ha generado una enorme crisis de legitimidad y representatividad, donde los problemas de corrupción y colusión empresarial son sus expresiones más incómodas y visibles.</p>
						<p>Este creciente malestar en diferentes franjas sociales ha permitido la emergencia de un conjunto de liderazgos, fuerzas e iniciativas políticas y sociales que persiguen el objetivo de intervenir y participar del espacio político para transformar la sociedad y avanzar hacia más democracia, más libertades, más igualdad social e igualdad entre géneros y más protección de los ecosistemas que sustentan la vida en común. Por ahora, sin embargo, dichas instancias han operado de modo discontinuo, fragmentado y localizado, lo que ha impedido la constitución de un espacio político alternativo a los dos grandes bloques en el que pueda reconocerse la mayoría social, la que ha optado en una medida importante por sustraerse de la participación política. Es nuestra misión construir un punto de referencia para las iniciativas transformadoras. Por ello nos orientamos hacia la conformación de un movimiento político y social amplio que permita hacer converger, en su diversidad, todos los esfuerzos y las voluntades que permitan cambiar democráticamente la estructuras desiguales de poder en Chile, y que sea una fuerza política con opción real de gobernar y de legislar en beneficio de la mayoría social, antes que permanecer sólo en el terreno testimonial.</p>
						<p>Construir convergencia y unidad es probablemente uno de los desafíos más relevantes que tenemos las fuerzas transformadoras para el futuro inmediato.  Se trata de conformar un referente que supere el estrecho margen de una coalición electoral, con una identidad propia, en el que conviva la más amplia gama de visiones y organizaciones políticas, sociales e independientes. Necesitamos ante todo sumar voluntades de los miles de chilenos y chilenas que quieren cambios y que no se sienten representados por las coaliciones de hoy. Somos ciudadanos y organizaciones sociales y populares que queremos tomar el futuro en nuestras manos e invitar a ser de nuevo un pueblo con voluntad colectiva.</p>
						<p>Como primer paso de este largo camino, invitamos a la ciudadanía y las organizaciones sociales a construir Frente Amplio a lo largo de todo el país. Para desde este espacio constituir un pacto electoral unitario para enfrentar juntos las elecciones parlamentarias, de consejeros regionales y presidenciales venideras. </p>
					</div>
				</div>
				<div class="col-md-8 content">
					<div class="textoConvocatoria">
						<h2>Nuestros Principios</h2>
						<ol>
							<li>La conformación de una fuerza política y social transformadora cuyo propósito es superar el sistema neoliberal.</li>
							<li>La unidad en la diversidad, con vocación participativa, democrática y plural.</li>
							<li>Ser alternativa al duopolio conformado por la Derecha y la Nueva Mayoría.</li>
							<li>Independencia total  del poder empresarial.</li>
							<li>Un programa construido democráticamente como base de la unidad.</li>
						</ol>
					</div>
				</div>
			</div>
			<hr>
			
			<div class="row logos">
				<?php
					
					$nombres_orgas = array(
					'Izquierda Libertaria' => 'https://www.facebook.com/izqlibertaria/',
					'Movimiento Autonomista' => 'https://www.facebook.com/Movimiento.Autonomista/',
					'Nueva Democracia' => 'https://www.facebook.com/NuevaDemocraciaChile/',
					'Revolucion Democratica' => 'https://www.facebook.com/RevolucionDemocraticaChile/',
					'Izquierda Autonoma' => 'https://www.facebook.com/izquierda.autonoma/',
					'Convergencia de Izquierdas' => 'https://www.facebook.com/convergenciadeizquierdas/?fref=ts',
					'Partido Igualdad' => 'https://www.facebook.com/Partido.Igualdad/?fref=ts',
					'Partido Ecologista Verde' => 'https://www.facebook.com/PartidoEcologistaVerde/?fref=ts',
					'Partido Humanista' => 'https://www.facebook.com/PartidoHumanistaChile/?fref=ts',
					'Partido Poder' => 'https://www.facebook.com/PoderChile',
					'Partido Liberal' => 'https://www.facebook.com/PartidoLiberaldeChile/?fref=ts');
					
					foreach ($nombres_orgas as $nombres_orgas => $url_orgas) {
						$logos[] = '
						<a href="'.$url_orgas.'" target="_blank">
						<img src="img/logos/'.$nombres_orgas.'.png" alt="'.$nombres_orgas.'" title="'.$nombres_orgas.'" />
						</a>';
					}
					// aleatoriza el orden
					shuffle($logos);
					
					// despliega los logos aleatoreamente
					for ($a=0; $a <= 10; $a++) {
						echo $logos[$a];
					}
					
				?>
			</div>
			<hr>
			<footer>
				<p>Frente Amplio 2017 / www.frente-amplio.cl </p>
			</footer>
		</div> <!-- /container -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
		
		<script src="js/vendor/validator.min.js"></script>
		<script src="js/jquery.Rut.js"></script>
        <!--<script src="js/jquery.validation.js"></script>-->
        <script src="js/main.js"></script>
		
        <script src="js/submit_form.js"></script>
	    <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=2065792086980787";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
		
	</body>
</html>
