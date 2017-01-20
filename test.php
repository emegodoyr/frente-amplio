<?php


$organizaciones = array('il' => 'Izquierda Libertaria','ma' => 'movimiento Autonomista', 'nd' => 'nueva Democracia' );

shuffle($organizaciones);

foreach ($organizaciones as $key => $value) {

echo $value." -".$key." <br>";


}


 ?>
