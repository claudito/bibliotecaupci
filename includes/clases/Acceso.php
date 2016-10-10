<?php 

class Acceso
{

protected $user;
protected $pass;


function __construct($user,$pass)
{

$this->user = addslashes($user);
$this->pass = addslashes($pass); 

}

function Login()
{
$db      = new Conexion();
$query   = "SELECT * FROM login WHERE UPPER(user)=UPPER('$this->user') 
            AND pass='$this->pass' AND estado='on'";
$result  = $db->query($query);
$numfila = $result->num_rows;
$dato    = mysqli_fetch_array($result);
if ($numfila >0) 
{
	
session_start();
$_SESSION[KEY.USUARIO]   = $dato['idlogin'];
$_SESSION[KEY.NOMBRES]   = $dato['nombres'];
$_SESSION[KEY.APELLIDOS] = $dato['apellidos'];
$_SESSION[KEY.TIPO]      = $dato['tipo'];

if ($_SESSION[KEY.TIPO]=='admin') 
{
  header('Location: '.PATH.'admin');
}
else
{
  header('Location: '.PATH.'');
}

}
else
{ 

echo "
<script>
alert('El usuario o contraseña son incorrectos.');
window.location='".PATH."';
</script>";

}

}

function Logout()
{

session_start();
if (!isset($_SESSION[KEY.USUARIO])) 
{
header('Location: '.PATH.'');
}
else
{
  unset($_SESSION[KEY.USUARIO]);
  unset($_SESSION[KEY.NOMBRES]);
  unset($_SESSION[KEY.APELLIDOS]);
  unset($_SESSION[KEY.TIPO]);
  header('Location: '.PATH.'');

}


}


}

 ?>