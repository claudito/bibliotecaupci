<?php 

class Usuarios
{

protected $nombres;
protected $apellidos;
protected $codigo;
protected $dni;
protected $user;
protected $pass;
protected $cargo;
protected $correo;
protected $telefono;
protected $fecha_nac;
protected $ciclo;
protected $tipo_usuario;
protected $turno;
protected $especialidad;
private   $lista;


function __construct($nombres,$apellidos,$codigo,$dni,$user,$pass,$cargo,$correo,$telefono,$fecha_nac,$ciclo,$tipo_usuario,$turno,$especialidad)
{

 $this->nombres      =  $nombres;
 $this->apellidos    =  $apellidos;
 $this->codigo       =  $codigo;
 $this->dni          =  $dni;
 $this->user         =  $user;
 $this->pass         =  $pass;
 $this->cargo        =  $cargo;
 $this->correo       =  $correo;
 $this->telefono     =  $telefono;
 $this->fecha_nac    =  $fecha_nac;
 $this->ciclo        =  $ciclo;
 $this->tipo_usuario =  $tipo_usuario;
 $this->turno        =  $turno;
 $this->especialidad =  $especialidad;
 $this->lista        = array();

}



function Registrar()
{

$db      =  new Conexion();
$query   = "SELECT * FROM  usuarios WHERE codigo_universidad='".$this->codigo."' OR user='".$this->user."'";
$result  = $db->query($query);
$numfila = $result->num_rows;
if ($numfila > 0) 
{
 return "existe";
}
else
{

$query = "INSERT INTO usuarios(nombres,apellidos,codigo_universidad,dni,user,pass,correo,telefono,tipo_usuarios_id,cargo,fecha_nacimiento,ciclo,turnos_id,especialidades_id)VALUES('".$this->nombres."','".$this->apellidos."','".$this->codigo."','".$this->dni."','".$this->user."','".$this->pass."','".$this->correo."','".$this->telefono."','".$this->tipo_usuario."','".$this->cargo."','".$this->fecha_nac."','".$this->ciclo."','".$this->turno."','".$this->especialidad."')";
$result = $db->query($query);
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

function Actualizar($id,$acceso,$estado)
{
$db =  new Conexion();
$query = "UPDATE usuarios SET  
nombres='".$this->nombres."',
apellidos='".$this->apellidos."',
codigo_universidad='".$this->codigo."',
dni='".$this->dni."',
correo='".$this->correo."',
pass='".$this->pass."',
tipo='".$acceso."',
fecha_nacimiento='".$this->fecha_nac."',
ciclo='".$this->ciclo."',
turnos_id='".$this->turno."',
especialidades_id='".$this->especialidad."',
tipo_usuarios_id='".$this->tipo_usuario."',
estado='".$estado."',
telefono='".$this->telefono."',
cargo='".$this->cargo."'

WHERE id='".$id."'";
$result = $db->query($query);
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
$db =  new Conexion();
$query = "DELETE FROM usuarios WHERE id='".$id."'";
$result = $db->query($query);
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
$query  = "SELECT * FROM usuarios ORDER BY nombres";
$result = $db->query($query);

while ($fila = $result->fetch_assoc()){
$this->lista[] = $fila;
}
return $this->lista;
}





}


 ?>