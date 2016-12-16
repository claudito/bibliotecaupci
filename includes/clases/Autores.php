<?php 

class Autores
{


protected $descripcion;
protected $tipo;


function __construct($descripcion,$tipo)
{

$this->descripcion = $descripcion;
$this->tipo        = $tipo;

}


function Registrar()
{

$db       = new Conexion();
$query    = "SELECT id,descripcion FROM autores WHERE descripcion='".$this->descripcion."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO autores(descripcion,tipo_autores_id)VALUES('".$this->descripcion."','".$this->tipo."')";
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
$query    = "UPDATE autores SET descripcion='".$this->descripcion."',
            tipo_autores_id='".$this->tipo."'  WHERE id='".$id."'";
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
$query    = "DELETE FROM autores WHERE id='".$id."'";
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