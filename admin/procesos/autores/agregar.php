<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Autores.php');
    $db     = new Conexion();    		
    $descripcion  = addslashes($_POST['descripcion']);
    $tipo         = addslashes($_POST['tipo']);
    $autores      = new Autores($descripcion,$tipo);
    $valor        = $autores -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("El Autor ya esta registrado", "Intente de Nuevo", "error");</script>';
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