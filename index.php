<?php 

include('config.php');


if ($_GET['cuenta']=='crear') 
{
	include('templates/crear-cuenta.php');
}
else
{
  include('templates/acceso.php');
}


 ?>