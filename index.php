<?php 

include('config.php');

session_start();

if (!isset($_SESSION[KEY.USUARIO])) 
{
  include('includes/bd/conexion.php');
  include('templates/acceso.php');
}
else
{
  include('templates/home.php');
}


 ?>