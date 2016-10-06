<?php 
error_reporting(0);
include('config.php');


if (isset($_GET['cuenta'])=='crear') 
{
	include('templates/crear-cuenta.php');
}
else
{
  include('templates/acceso.php');
}


 ?>