<?php 
include('../../../config.php');
include('../../../includes/bd/conexion.php');
$db     = new Conexion();
$query  = "SELECT id,codigo,descripcion FROM idiomas";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Código</th>
 				<th>Descripcion</th>
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
		<td><?php echo $row['codigo']; ?></td>
		<td><?php echo $row['descripcion']; ?></td>
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>" data-codigo="<?php echo $row['codigo']?>" data-descripcion="<?php echo $row['descripcion']?>"<i class='glyphicon glyphicon-edit'></i> Modificar</button>
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