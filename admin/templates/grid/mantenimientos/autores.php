<?php 

$db     =  new Conexion();
$query  = "SELECT a.id,a.codigo,a.descripcion,a.id_tipo_autor,ta.descripcion as autor from autor as a  
INNER JOIN  tipo_autor as ta ON a.id_tipo_autor=ta.id";
$result = $db->query($query);
 ?>
 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="active">
 			    <th>ID</th>
 				<th>Codigo</th>
 				<th>Descripción</th>
 				<th>Tipo</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($fila = mysqli_fetch_object($result)) 
        {
         ?>       
         
		<tr>
		<td><?php echo $fila->id; ?></td>
		<td><?php echo $fila->codigo; ?></td>
		<td><?php echo $fila->descripcion; ?></td>
		<td><?php echo $fila->autor; ?></td>
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