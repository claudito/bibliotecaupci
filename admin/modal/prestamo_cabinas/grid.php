<?php 
include('../../../config.php');
include('../../../includes/bd/conexion.php');
$db     = new Conexion();
$query  = "SELECT	 p.id,p.hora_inicio,p.hora_fin,DATE_FORMAT(p.fecha_prestamo,'%d/%m/%Y')as fecha_prestamo,p.comentario1,c.descripcion as cabina,u.nombres,u.apellidos,p.estado from prestamo_cabinas as p
inner join  cabinas as c ON p.cabinas_id=c.id
inner join  usuarios as u ON p.usuarios_id=u.id";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="active">
 				<th>ID</th>
 				<th>Hora Inicio</th>
 				<th>Hora Fin</th>
 				<th>Cabina</th>
 				<th>Comentario</th>
 				<th>Usuario</th>
 				<th>Fecha de Prestamo</th>
 				
 				<th>Acciones</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($row = mysqli_fetch_array($result))
         {
        ?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['hora_inicio']; ?></td>
		<td><?php echo $row['hora_fin']; ?></td>
	    <td><?php echo $row['cabina']; ?></td>
		<td><?php echo $row['comentario1']; ?></td>
		<td><?php echo $row['nombres'].' '.$row['apellidos']; ?></td>
		<td><?php echo $row['fecha_prestamo']; ?></td>
	
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>" data-horainicio="<?php echo $row['hora_inicio']?>" data-horafin="<?php echo $row['hora_fin']?>" data-cabina="<?php echo $row['cabina']?>" data-usuario="<?php echo $row['nombres']?>" data-comentario="<?php echo $row['comentario1']?>"><i class='glyphicon glyphicon-edit'></i> Modificar</button>
		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
		</td>
		</tr>
        <?php
         }
 		 ?>
 		</tbody>
 	</table>
 </div>

 <script>
 $(document).ready(function() {
    $('#consulta').DataTable();
} );
 </script>