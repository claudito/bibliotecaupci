<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Cabinas.php');
    $db           = new Conexion();    		
    $comentario   = addslashes($_POST['comentario']);
    $descripcion  = addslashes($_POST['descripcion']);

    $cabinas = new Cabinas($descripcion,$comentario);
    $valor   = $cabinas -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("La Cabina ya esta registrada", "Intente de Nuevo", "error");</script>';
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