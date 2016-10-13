<?php 


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
<li>Nombres: Luis Augusto</li>
<li>Apellidos: Claudio Ponce</li>
<li>Correo Electronico: megabyte1507@gmail.com</li>
<li>Telefóno: 997935085</li>
<li>Codigo Universidad: 1107000044</li>
<li>Contraseña : luicla14</li>
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

echo "correo enviado";











?>