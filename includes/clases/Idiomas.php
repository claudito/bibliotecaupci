<?php 

class Idiomas
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
$query    = "SELECT codigo,descripcion FROM idiomas WHERE codigo='".$this->codigo."' OR descripcion='".$this->descripcion."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO idiomas(codigo,descripcion)VALUES('".$this->codigo."','".$this->descripcion."')";
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
$query    = "UPDATE idiomas SET codigo='".$this->codigo."',descripcion='".$this->descripcion."' WHERE id='".$id."'";
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
$query    = "DELETE FROM idiomas WHERE id='".$id."'";
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