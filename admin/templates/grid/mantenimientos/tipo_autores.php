<?php 

$db     =  new Conexion();
$query  = "SELECT id,descripcion FROM tipo_autor;";
$result = $db->query($query);
 ?>
 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="active">
 			    <th>ID</th>
 				<th>Descripción</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($fila = mysqli_fetch_object($result)) 
        {
         ?>       
         
		<tr>
		<td><?php echo $fila->id; ?></td>
		<td><?php echo $fila->descripcion; ?></td>
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