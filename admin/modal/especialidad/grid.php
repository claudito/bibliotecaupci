<?php 
include('../../../config.php');
include('../../../includes/bd/conexion.php');
$db     = new Conexion();
$query  = "SELECT e.id,e.descripcion,e.facultades_id as idfacultad,a.descripcion as facultad  FROM especialidades as e INNER JOIN 
facultades as a  ON e.facultades_id=a.id";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Especialidad</th>
 				<th>Facultad</th>
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
		<td><?php echo $row['descripcion']; ?></td>
		<td><?php echo $row['facultad']; ?></td>
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>" data-descripcion="<?php echo $row['descripcion']?>" data-tipo="<?php echo $row['facultad']?>" data-idtipo="<?php echo $row['idfacultad']?>"><i class='glyphicon glyphicon-edit'></i> Modificar</button>
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