<?php 

session_start();

if (!isset($_SESSION[KEY.USUARIO])  || $_SESSION[KEY.TIPO]!=='admin') 
{

header('Location: '.PATH.'');

}




 ?>