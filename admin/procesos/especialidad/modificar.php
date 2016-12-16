<?php 

# conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Especialidad.php');
    $db        = new Conexion(); 
    $id        = addslashes($_POST['id']);    
    $idfacultad    = addslashes($_POST['tipo']); 
    $nuevofacultad = addslashes($_POST['nuevotipo']); 
    $descripcion  = addslashes($_POST['descripcion']);
   
    if (empty($nuevofacultad)) 
    {
     $facultad = $idfacultad;
    }
    else
    {
     $facultad = $nuevofacultad;
    }
   
    $especialidades = new Especialidades($descripcion,$facultad);
    $valor   = $especialidades->Actualizar($id);

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