<?php

	# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Palabras_clave.php');
    $db                  = new Conexion();    		
    $codigo              = addslashes($_POST['codigo']);
    $descripcion         = addslashes($_POST['descripcion']);

    $palabras_clave = new Palabras_clave($codigo,$descripcion);
    $valor               = $palabras_clave -> Registrar(); 

    
    if ($valor == 'existe') 
    {
    echo '<script>sweetAlert("La Palabra Clave ya esta Registrada", "Intente de Nuevo", "error");</script>';
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