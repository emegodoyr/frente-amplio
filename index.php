<?php
error_reporting(E_ALL ^ E_NOTICE);

require 'funciones/conecta.php';
require 'funciones/fechas.php';
require 'funciones/funciones.php';
require 'funciones/variables.php';

if (!isset($_GET["s"])) {
  $seccion = 'inicio';
}
else {
  $seccion = $_GET["s"];
}

include 'modulos/inscripcion.php';

 ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulo_pagina; ?></title>
        <meta name="description" content="<?php echo $descripcion_pagina; ?>">  <!-- pendiente texto -->
        <meta property="og:title" content="<?php echo $titulo_share; ?>" />  <!-- pendiente texto -->
        <meta property="og:description" content="<?php echo $descripcion_share; ?>" />  <!-- pendiente texto -->
        <meta property="og:image" content="<?php echo $imagen_share; ?>" /> <!-- pendiente imagen -->
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
    <body>
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
<?php echo $titulo_pagina; ?>
<br>
<small><?php echo $subTitulo_pagina; ?></small>
</h2>
</div>

  </div>
  <div class="col-md-4 socialButtons">
    <?php if ($seccion!="gracias") { ?>
    <p>
      <a class="twitter popup" href="http://twitter.com/share?text=<?php echo $mensaje_compartir_tw; ?>">
        <img src="http://www.movimientoautonomista.cl/frenteampliomuestra/img/twitter.png" alt="" />
      </a>
      <a class="facebook popup" href="https://www.facebook.com/sharer/sharer.php?u=http://www.frente-amplio.cl/">
        <img  src="http://www.movimientoautonomista.cl/frenteampliomuestra/img/facebook.png"  alt="" />
      </a>
      <a href="whatsapp://send?text=<?php echo $mensaje_compartir_wsp; ?>">
        <img  src="http://www.movimientoautonomista.cl/frenteampliomuestra/img/whatsapp.png"  alt="" />
      </a>
      </p>
<p>
  Comparte esta convocatoria
</p>
<?php } ?>
  </div>
</div>
</div>
        <div class="container">

          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#"></a>
</div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="<?php if ($seccion=="") { echo "active"; } ?>"><a href="?">Inicio</a></li>
                <li class="<?php if ($seccion=="La-Convocatoria") { echo "active"; } ?>"><a href="?">Lee y firma la Convocatoria</a></li>
                <li class="<?php if ($seccion=="Quienes-Somos") { echo "active"; } ?>"><a href="?s=Quienes-Somos">Quienes somos</a></li>
              </ul>
            </div>
          </div>
          </nav>
</div>

    <div class="container">
      <?php
      include 'modulos/'.$seccion.'.php';
       ?>
       <hr>

  <div class="row logos">
  <?php
  if ($seccion!='Quienes-Somos') {
  include 'modulos/piedepagina.php';
  }
   ?>
  </div>
      <hr>
      <footer>
        <p><?php echo $firma; ?></p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.Rut.js"></script>
        <script src="js/jquery.validation.js"></script>
        <script src="js/main.js"></script>

        <!-- PENDIENTE Google Analytics-->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
