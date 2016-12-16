<?php 

include('../../../config.php');
include('../../session.php');
include('../../../includes/bd/conexion.php');

$db = new Conexion();

$fecha       = date('Y-m-d');
$usuario     = $_POST['usuario'];
$cabina      = $_POST['cabina'];
$horainicio  = $_POST['horainicio'];
$horafin     = $_POST['horafin'];
$comentario  = $_POST['comentario'];

$query  = "INSERT INTO prestamo_cabinas(hora_inicio,hora_fin,fecha_prestamo,comentario1,usuarios_id,cabinas_id)VALUES('".$horainicio."','".$horafin."','".$fecha."','".$comentario."','".$usuario."','".$cabina."')";
$result = $db->query($query);
if ($result) 
{
echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Exitoso",
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
    title: "Ocurrio un error al registar",
    text: "Consulte al área de soporte",
    type: "warning",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';
}



 ?>