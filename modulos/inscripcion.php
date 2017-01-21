<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;


//if(isset($_POST["enviar"])) {

  $_POST['nombres'] = (string) strip_tags($_POST['nombres']);
  $_POST['apellidos'] = (string) strip_tags($_POST['apellidos']);
  $_POST['email'] = (string) strip_tags($_POST['email']);
  $_POST['rut'] = (string) strip_tags($_POST['rut']);
  

  $client = new Client();

  try {
    
    $response = $client->request('POST', 'http://ec2-35-166-208-12.us-west-2.compute.amazonaws.com/web/insertar', [
        'form_params' => [
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
            'rut' => $_POST['rut'],
            'email' => $_POST['email'],
        ]
    ]);
    
    echo strip_tags($response->getBody());
    
    
      
  } catch (RequestException $e) {
      echo Psr7\str($e->getRequest());
      if ($e->hasResponse()) {
          echo Psr7\str($e->getResponse());
      }
  }

//}





