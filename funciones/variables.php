<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url = "http://" . $host . $url;


// titulo y descripcion de la pagina
$titulo_pagina = 'Frente Amplio';
$subTitulo_pagina = 'Construyendo una Alternativa';
$descripcion_pagina = 'Firma la convocatoria por un frente amplio 2017';
$firma = 'Frente Amplio 2017 / www.frente-amplio.cl ';

// contenido para al compartir en redes sociales
$titulo_share = $titulo_pagina;
$descripcion_share = $descripcion_pagina;
$imagen_share = '';

// redes sociales
// twitter
$mensaje_compartir_tw = $descripcion_pagina;
$mensaje_compartir_tw = str_replace(' ','%20',$mensaje_compartir_tw);

// whatsapp
$mensaje_compartir_wsp = $descripcion_pagina." ".$url;

// formulario
$aclaracion_datos = 'Los datos solicitados serán utilizados estrictamente para fines de comunicarnos contigo y enviarte información sobre la conformación del frente amplio.';

// agradecimiento;
$mensaje_agradecimiento = 'Con tu firma optamos a un mejor Chile...';








 ?>
