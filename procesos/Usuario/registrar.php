<?php 

include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Usuarios.php');
$db = new Conexion();

$nombres    = $_POST['nombres']; 
$apellidos  = $_POST['apellidos'];
$codigo     = $_POST['codigo'];
$user       = $_POST['codigo'];
$pass       = strtolower(substr($_POST['nombres'],0,3)).strtolower(substr($_POST['apellidos'],0,3)).rand(5, 15);
$correo     = $_POST['correo'];
$telefono   = $_POST['telefono'];
$tipo       = $_POST['tipo'];

$usuarios =  new Usuarios($nombres,$apellidos,$codigo,'',$user,$pass,'',$correo,$telefono,'','',$tipo,1,'');
$valor    =  $usuarios -> Registrar();

if ($valor=='existe')
{
 echo "<script>
alert('El Usuario ya esta registrado');
window.location='".PATH."';
 </script>";
} 
else  if ($valor=='ok')
{
 header('Location: '.PATH.'mensaje/usuario-creado');
}
else  
{
  echo "<script>
alert('Error al registra,consulte al áre de soporte');
window.location='".PATH."';
 </script>";
}



 ?>