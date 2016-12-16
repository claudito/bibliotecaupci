<?php 

# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Area_tematica.php');
    $db     = new Conexion(); 
    $id           = addslashes($_POST['id']);        
    $codigo       = addslashes($_POST['codigo']);
    $descripcion  = addslashes($_POST['descripcion']);

    $area_tematica = new Area_tematica($codigo,$descripcion);
    $valor         = $area_tematica->Actualizar($id);

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