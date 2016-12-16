<?php 

class Especialidades
{


protected $descripcion;
protected $facultad;
private $lista;



function __construct($descripcion,$facultad)
{

$this->descripcion = $descripcion;
$this->facultad    = $facultad;
$this->lista       = array();

}


function Registrar()
{

$db       = new Conexion();
$query    = "SELECT descripcion FROM especialidades WHERE descripcion='".$this->descripcion."' AND facultades_id='".$this->facultad."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO especialidades(descripcion,facultades_id)VALUES('".$this->descripcion."','".$this->facultad."')";
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
$query    = "UPDATE especialidades SET descripcion='".$this->descripcion."',
            facultades_id='".$this->facultad."'  WHERE id='".$id."'";
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
$query    = "DELETE FROM especialidades WHERE id='".$id."'";
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
$query  = "SELECT * FROM especialidades";
$result = $db->query($query);

while ($fila = $result->fetch_assoc()){
$this->lista[] = $fila;
}
return $this->lista;
}


}


 ?>