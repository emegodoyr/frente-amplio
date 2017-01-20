<?php


if(isset($_POST["enviar"])) {

  $_POST['nombres'] = strip_tags($_POST['nombres']);
  $_POST['apellidos'] = strip_tags($_POST['apellidos']);
  $_POST['email'] = strip_tags($_POST['email']);
  $_POST['rut'] = strip_tags($_POST['rut']);

  echo 'llegue';
  return FALSE;

if($_POST['nombres']=="") {
  echo "<script> alert('Debes indicar tu nombre'); history.back(-1); </script>";
exit();
}
if($_POST['apellidos']=="") {
echo "<script> alert('Debes indicar tu apellido'); history.back(-1); </script>";
exit();
}
if($_POST['rut']=="") {
  echo "<script> alert('Necesitamos tu RUT para saber que existes :D'); history.back(-1); </script>";
exit();
}
if($_POST['email']=="") {
echo "<script> alert('Sin un correo electronico,no te podriamos escribir'); history.back(-1); </script>";
exit();
}

$ipe = get_client_ip();
$info=detect();



$rut_ok=TRUE;
if ($result2 = mysqli_query($con, "SELECT rut FROM inscritos WHERE rut='$_POST[rut]' ")) {
      while ($row2 = mysqli_fetch_assoc($result2)) {
        $rut_ok=FALSE;
      }
    }
    mysqli_free_result($result2);
if (!$rut_ok) {
  echo "<script> alert('Tu rut ya se encuentra registrado, si crees que esto ha sido un error, favor escribenos a inscripciones@frente-amplio.cl'); history.back(-1); </script>";
  exit();
}
else {
  $correo_ok=TRUE;
  if ($result2 = mysqli_query($con, "SELECT email FROM inscritos WHERE email='$_POST[email]' ")) {
        while ($row2 = mysqli_fetch_assoc($result2)) {
          $correo_ok=FALSE;
        }
      }
      mysqli_free_result($result2);

  if (!$correo_ok) {
    echo "<script> alert('El correo electronico ingresado ya se encuentra registrado, si crees que esto ha sido un error, favor escribenos a inscripciones@frente-amplio.cl'); history.back(-1); </script>";
    exit();
  }

// insert
  mysqli_query($con,"INSERT INTO inscritos (nombres,rut,apellidos,email,ipe,navegador,soperativo,recibeMails,dispositivo,fecha)
  VALUES ('$_POST[nombres]','$_POST[rut]','$_POST[apellidos]','$_POST[email]','$ipe ','$info[browser]','$info[os]','$_POST[recibeMails]','$dispositivo','$ahora')");
}

$seccion = 'gracias';
}

 ?>
