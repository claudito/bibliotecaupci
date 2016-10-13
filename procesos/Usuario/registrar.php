<?php 

include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Login.php');

$nombres    = $_POST['nombres']; 
$apellidos  = $_POST['apellidos'];
$codigo     = $_POST['codigo'];
$user       = $_POST['codigo'];
$pass       = strtolower(substr($_POST['nombres'],0,3)).strtolower(substr($_POST['apellidos'],0,3)).rand(5, 15);
$correo     = $_POST['correo'];
$telefono   = $_POST['telefono'];
$tipo       = $_POST['tipo'];

$login =  new Login($nombres,$apellidos,$codigo,$user,$pass,$correo,
	                 $telefono,$tipo);
$login -> Registrar();

 ?>