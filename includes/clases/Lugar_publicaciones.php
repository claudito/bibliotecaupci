<?php 

class Lugar_publicaciones
{

protected $codigo;
protected $descripcion;


function __construct($codigo,$descripcion)
{

$this->codigo      = $codigo;
$this->descripcion = $descripcion;  

}


function Registrar()
{

$db       = new Conexion();
$query    = "SELECT codigo,descripcion FROM lugar_publicaciones WHERE codigo='".$this->codigo."' OR descripcion='".$this->descripcion."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO lugar_publicaciones(codigo,descripcion)VALUES('".$this->codigo."','".$this->descripcion."')";
$result   = $db->query($query);
if ($result) 
{
 return "ok";
}
else
{
 return "error";
}


}


}

function Actualizar($id)
{
$db       = new Conexion();
$query    = "UPDATE lugar_publicaciones SET codigo='".$this->codigo."',descripcion='".$this->descripcion."' WHERE id='".$id."'";
$result   = $db->query($query);
if ($result) 
{
 return "ok";
}
else
{
 return "error";
}
	
}

function Eliminar($id)
{

$db       = new Conexion();
$query    = "DELETE FROM lugar_publicaciones WHERE id='".$id."'";
$result   = $db->query($query);
if ($result) 
{
 return "ok";
}
else
{
 return "error";
}



	
}


}


 ?>