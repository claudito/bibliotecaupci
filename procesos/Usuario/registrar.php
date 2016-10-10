<?php 

include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Login.php');

$nombres    = $_POST['nombres']; echo "</br>";
$apellidos  = $_POST['apellidos'];echo "</br>";
$codigo     = $_POST['codigo'];echo "</br>";
$user       = $_POST['codigo'];echo "</br>";
$pass       = strtolower(substr($_POST['nombres'],0,3)).strtolower(substr($_POST['apellidos'],0,3)).rand(5, 15);echo "</br>";
$correo     = $_POST['correo'];echo "</br>";
$telefono   = $_POST['telefono'];echo "</br>";
$tipo       = $_POST['tipo'];echo "</br>";

$login =  new Login($nombres,$apellidos,$codigo,$user,$pass,$correo,
	                 $telefono,$tipo);
$login -> Registrar();
 ?>