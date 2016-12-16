<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Editoriales.php');
    $db     = new Conexion();    		
    $codigo       = addslashes($_POST['codigo']);
    $descripcion  = addslashes($_POST['descripcion']);

    $editoriales = new Editoriales($codigo,$descripcion);
    $valor   = $editoriales -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("La editorial ya esta registrada", "Intente de Nuevo", "error");</script>';
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