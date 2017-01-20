<?php

// construye el logo con la url de cada organización
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
