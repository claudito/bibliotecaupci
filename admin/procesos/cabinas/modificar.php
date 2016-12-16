<?php 

# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Cabinas.php');
    $db           = new Conexion(); 
    $id           = addslashes($_POST['id']);        
    $comentario   = addslashes($_POST['comentario']);
    $descripcion  = addslashes($_POST['descripcion']);

    $cabinas      = new Cabinas($descripcion,$comentario);
    $valor        = $cabinas->Actualizar($id);

    if ($valor=='ok')
    {
    echo '<script>swal("Buen Trabajo", "Registro Actualizado", "success")</script>';
    }
    else if ($valor=='error')
    {
    echo '<script>sweetAlert("Ocurrio un error al actualizar", "Consulte al área de soporte", "error");</script>';
    }
    else
    {
    echo '<script>sweetAlert("Ocurrio un error inesperado", "Consulte al área de soporte", "error");</script>';
    }
    





 ?>