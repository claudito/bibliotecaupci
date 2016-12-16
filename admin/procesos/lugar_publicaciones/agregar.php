<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Lugar_publicaciones.php');
    $db                  = new Conexion();    		
    $codigo              = addslashes($_POST['codigo']);
    $descripcion         = addslashes($_POST['descripcion']);

    $lugar_publicaciones = new Lugar_publicaciones($codigo,$descripcion);
    $valor               = $lugar_publicaciones -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("El Lugar de Publicación ya esta Registrado", "Intente de Nuevo", "error");</script>';
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