<?php 

include('../../../config.php');
include('../../session.php');
include('../../../includes/bd/conexion.php');

$db = new Conexion();

$id          = $_POST['id'];
$horainicio  = $_POST['horainicio'];
$horafin     = $_POST['horafin'];
$comentario  = $_POST['comentario'];

$query  = "UPDATE prestamo_cabinas SET hora_inicio='".$horainicio."',hora_fin='".$horafin."',comentario1='".$comentario."' WHERE id='".$id."'";
$result = $db->query($query);
if ($result) 
{
echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Actualización Exitosa",
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
    title: "Ocurrio un error al Actualizar",
    text: "Consulte al área de soporte",
    type: "warning",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';
}



 ?>