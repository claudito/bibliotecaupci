<?php 

class Cabinas
{

protected $descripcion;
protected $comentario;
private $lista;



function __construct($descripcion,$comentario)
{

$this->descripcion     = $descripcion;  
$this->comentario      = $comentario;
$this->lista           = array(); 

}


function Registrar()
{

$db       = new Conexion();
$query    = "SELECT comentario,descripcion FROM cabinas WHERE 
              descripcion='".$this->descripcion."'";
$result   = $db->query($query);
$numfila  = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{
 
$query    = "INSERT INTO cabinas(comentario,descripcion)VALUES('".$this->comentario."','".$this->descripcion."')";
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
$query    = "UPDATE cabinas SET comentario='".$this->comentario."',descripcion='".$this->descripcion."' WHERE id='".$id."'";
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
$query    = "DELETE FROM cabinas WHERE id='".$id."'";
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
$query  = "SELECT * FROM cabinas";
$result = $db->query($query);

while ($fila = $result->fetch_assoc()){
$this->lista[] = $fila;
}
return $this->lista;
}




}


 ?>