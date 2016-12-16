<?php 

# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Autores.php');
    $db        = new Conexion(); 
    $id        = addslashes($_POST['id']);    
    $idtipo    = addslashes($_POST['tipo']); 
    $nuevotipo = addslashes($_POST['nuevotipo']); 
    $descripcion  = addslashes($_POST['descripcion']);
   
    if (empty($nuevotipo)) 
    {
     $tipo = $idtipo;
    }
    else
    {
     $tipo = $nuevotipo;
    }
   
    $autores = new Autores($descripcion,$tipo);
    $valor   = $autores->Actualizar($id);

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