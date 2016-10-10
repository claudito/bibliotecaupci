<?php 

include('../config.php');
include('../includes/bd/conexion.php');
include('../includes/clases/Acceso.php');

$db = new Conexion();
$acceso =  new Acceso($_POST['usuario'],$_POST['contrasena']);

$acceso -> Login();




 ?>