<?php 

class Tipo_usuarios
{


protected $descripcion;
private $lista;



function __construct($descripcion)
{

$this->descripcion = $descripcion;  
$this->lista       = array();

}


function Registrar()
{

$db       = new Conexion();
$query    = "SELECT id,descripcion FROM tipo_usuarios WHERE descripcion='".$this->descripcion."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO tipo_usuarios(descripcion)VALUES('".$this->descripcion."')";
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
$query    = "UPDATE tipo_usuarios SET descripcion='".$this->descripcion."'
              WHERE id='".$id."'";
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
$query    = "DELETE FROM tipo_usuarios WHERE id='".$id."'";
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



public function lista()
{   
$db     = new Conexion();
$query  = "SELECT * FROM tipo_usuarios";
$result = $db->query($query);

while ($fila = $result->fetch_assoc()){
$this->lista[] = $fila;
}
return $this->lista;
}






}


 ?>