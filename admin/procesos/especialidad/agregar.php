<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Especialidad.php');
    $db     = new Conexion();    		
    $descripcion      = addslashes($_POST['descripcion']);
    $facultad         = addslashes($_POST['tipo']);
    $especialidades   = new Especialidades($descripcion,$facultad);
    $valor            = $especialidades -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("La Especialidad ya esta registrada", "Intente de Nuevo", "error");</script>';
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