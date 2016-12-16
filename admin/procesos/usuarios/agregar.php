<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Usuarios.php');
    $db     = new Conexion();    		
    $nombres       = addslashes($_POST['nombres']);
    $apellidos     = addslashes($_POST['apellidos']);
    $codigo        = addslashes($_POST['codigo']);
    $dni           = addslashes($_POST['dni']);
    $user          = addslashes($_POST['usuario']);
    $pass          = addslashes($_POST['contrasena']);
    $correo        = addslashes($_POST['correo']);
    $telefono      = addslashes($_POST['telefono']);
    $tipo_usuario  = addslashes($_POST['tipo']);
    $cargo         = addslashes($_POST['cargo']);
    $fecha_nac     = addslashes($_POST['fecha_nac']);
    $turno         = addslashes($_POST['turno']);
    $especialidad  = addslashes($_POST['especialidad']);
    $fecha_nac     = addslashes($_POST['fecha_nac']);
    $ciclo         = addslashes($_POST['ciclo']);
    $turno         = addslashes($_POST['turno']);
    $especialidad  = addslashes($_POST['especialidad']);

    $usuarios = new Usuarios($nombres,$apellidos,$codigo,$dni,$user,$pass,$cargo,$correo,$telefono,$fecha_nac,$ciclo,$tipo_usuario,$turno,$especialidad);
    $valor   = $usuarios -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("EL Usuario ya esta Registrado", "Intente de Nuevo", "error");</script>';
    } 
    else if ($valor == 'ok')  
    {
    echo '<script>swal("Buen Trabajo", "Registro exitoso", "success")</script>';
    }
    else if ($valor == 'error')  
    {
     echo '<script>sweetAlert("Ocurrio un error al registrar", "Consulte al área de soporte", "error");</script>';
    }
    else
    {
     echo '<script>sweetAlert("Ocurrio un error inesperado", "Consulte al área de soporte", "error");</script>';
    }
    
    

?>