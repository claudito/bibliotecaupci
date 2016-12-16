<?php 

include('../../../config.php');
include('../../session.php');
include('../../../includes/bd/conexion.php');

$db = new Conexion();

$id = $_POST['id'];

$query  = "DELETE FROM prestamo_cabinas WHERE id='".$id."'";
$result = $db->query($query);
if ($result) 
{
echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Eliminación Exitosa",
    type:"success",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';
} 
else
{
echo '<script>
    swal({
    title: "Ocurrio un error al eliminar",
    text: "Consulte al área de soporte",
    type: "warning",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';
}



 ?>