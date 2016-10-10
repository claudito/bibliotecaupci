<?php 

class Login
{

protected $nombres;
protected $apellidos;
protected $codigo;
protected $user;
protected $pass;
protected $correo;
protected $telefono;
protected $tipo;


function __construct($nombres,$apellidos,$codigo,$user,$pass,$correo,
	                 $telefono,$tipo)
{

$this->nombres    = addslashes($nombres);
$this->apellidos  = addslashes($apellidos);
$this->codigo     = addslashes($codigo);
$this->user 	  = addslashes($user);
$this->pass       = addslashes($pass);
$this->correo     = addslashes($correo);
$this->telefono   = addslashes($telefono);
$this->tipo       = addslashes($tipo);

}


function Registrar()
{

$db      = new Conexion();
$query   = "SELECT * FROM login WHERE codigo='$this->codigo'";
$result  = $db->query($query);
$numfila = $result->num_rows;
if ($numfila>0)
{
   echo "<script>
   alert('El código ya esta registrado');
   window.location='".PATH."';
   </script>";
    
}
else
{

$db     = new Conexion();
$query  = "INSERT INTO login(nombres,apellidos,codigo,user,pass,correo,telefono,tipo_usuarios_idtipo_usuarios)VALUES('$this->nombres','$this->apellidos','$this->codigo','$this->user','$this->pass','$this->correo','$this->telefono','$this->tipo')";
$result = $db->query($query);
if ($result) 
{
  header('Location: '.PATH.'mensaje/usuario-creado');
}
else
{
  echo "
  <script>
  alert('Error de Registro,vuelva a intentarlo');
  window.location='".PATH."';
  </script>";
}


}

}

}

 ?>