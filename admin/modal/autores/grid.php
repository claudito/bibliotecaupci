<?php 
include('../../../config.php');
include('../../../includes/bd/conexion.php');
$db     = new Conexion();
$query  = "SELECT a.id,a.descripcion,ta.descripcion as tipo,ta.id as idtipo from autores as a inner join tipo_autores as ta ON 
a.tipo_autores_id=ta.id";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Descripcion</th>
 				<th>Tipo</th>
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
		<td><?php echo $row['tipo']; ?></td>
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>" data-descripcion="<?php echo $row['descripcion']?>" data-tipo="<?php echo $row['tipo']?>" data-idtipo="<?php echo $row['idtipo']?>"><i class='glyphicon glyphicon-edit'></i> Modificar</button>
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