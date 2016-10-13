<?php 

include('../../config.php');

$destinatario ="biblioteca@upci.online";
$remitente    ="biblioteca@upci.online";
$asunto       = "Registro Nuevo"; 
$cuerpo =' 
<html> 
<head> 
<title>Registro Nuevo</title>

</head> 
<body> 
<h1>Solicitud de Registro</h1>
<hr>
<p>Se creado una nueva solicitud de registro con la siguiente información.</p> 
<ul>
<li>Nombres: '.$_GET['nombres'].'</li>
<li>Apellidos: '.$_GET['apellidos'].'</li>
<li>Correo Electronico: '.$_GET['correo'].'</li>
<li>Telefóno: '.$_GET['telefono'].'</li>
<li>Codigo Universidad: '.$_GET['codigo'].'</li>
<li>Contraseña : '.$_GET['pass'].'</li>
</ul>

</body> 
</html> 
'; 

$headers .= 'From: '.$remitente."\r\n".
'Reply-To: '.$remitente."\r\n" .
'X-Mailer: PHP/' . phpversion();

//para el envío en formato HTML 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers);

header('Location: '.PATH.'mensaje/usuario-creado');










?>