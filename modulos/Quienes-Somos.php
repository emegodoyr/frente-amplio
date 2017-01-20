<div class="page-header">
  <h1>Quienes componen el Frente Amplio</h1>
</div>
<div class="Quienes-Somos">
<center>
<?php

foreach ($nombres_orgas as $nombres_orgas => $url_orgas) {
$logos[] = '
<a href="'.$url_orgas.'" target="_blank">
<img src="img/logos/'.$nombres_orgas.'.png" height="150" alt="'.$nombres_orgas.'" title="'.$nombres_orgas.'" />
</a>';
}

shuffle($logos);

for ($a=0; $a <= 10; $a++) {
  echo $logos[$a];
}
 ?>
 </center>

</div>
