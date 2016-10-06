<?php 
class Acceso
{

protected $user;
protected $pass;

public function __construct($usuario,$password)
{
$this->user = addslashes($usuario);
$this->pass = addslashes($password);

}

public function  Login()
{


$db = new Conexion();

$query="SELECT idusuarios,			
						 nombres,
						 apellidos,
						 tipo_usuarios_idtipo_usuarios,
						 estado,
						 usuario,
						 contrasena FROM  
					usuarios WHERE usuario='$this->user' AND 
			 contrasena='$this->pass'";

//echo $query;
//die();

$sql= $db->query($query);


$dato = $db->recorrer($sql);


if (strtolower($dato['usuario'])==strtolower($this->user) 
	and $dato['contrasena']==$this->pass
	 )

{ 


	if ($dato['tipo_usuarios_idtipo_usuarios']==1) {

			session_start();

			$_SESSION['upci_nombres']=$dato['nombres'];
			$_SESSION['upci_apellidos']=$dato['apellidos'];
			$_SESSION['upci_tipos']=$dato['tipo_usuarios_idtipo_usuarios'];
			$_SESSION['upci_estado']=$dato['estado'];
			$_SESSION['upci_idusuario']=$dato['idusuarios'];
		

			header('Location: /admin/home.php');


		//echo "ADMINISTRADOR";
		//die();




	} else{

		//echo "USUARIO";
		//die();

			session_start();

			$_SESSION['upci_nombres']=$dato['nombres'];
			$_SESSION['upci_apellidos']=$dato['apellidos'];
			$_SESSION['upci_tipos']=$dato['tipo_usuarios_idtipo_usuarios'];
			$_SESSION['upci_estado']=$dato['estado'];
			$_SESSION['upci_idusuario']=$dato['idusuarios'];



			header('Location: /templates/home.php');

	}


		

}
else
{
header('Location: /biblioteca');
}
}




function Salir()
{

session_start();

if(!isset($_SESSION['upci_idusuario']))
{
echo "No hay ninguna sesion iniciada";
}
//esto ocurre cuando la sesion caduca.


else
{ 

unset($_SESSION['upci_nombres']);
unset($_SESSION['upci_apellidos']);
unset($_SESSION['upci_tipos']);
unset($_SESSION['upci_estado']);
unset($_SESSION['upci_estado']);

header('Location: /');       
}



}



}

?>