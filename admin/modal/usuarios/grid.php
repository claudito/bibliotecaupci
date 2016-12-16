<?php 
include('../../../config.php');
include('../../../includes/bd/conexion.php');
$db     = new Conexion();
$query  = "
SELECT u.id,u.nombres,u.apellidos,u.codigo_universidad,u.dni,u.user,u.pass,u.correo,u.telefono,u.tipo as idacceso,u.correo,u.fecha_nacimiento,u.ciclo,u.cargo,
case u.tipo 
when 'admin' then 'ADMINISTRADOR'
WHEN 'user' THEN 'USUARIO'
END  as acceso,
u.estado as idestado,
case u.estado
when 'on' then 'ACTIVO'
WHEN 'off' THEN 'INACTIVO'
END  as estado,
DATE_FORMAT(u.fecha_creacion,'%d/%m/%Y %H:%i:%s') as fecha_creacion,DATE_FORMAT(u.fecha_creacion,'%Y-%m-%d') as idfecha_creacion,
 t.id as idturno,t.descripcion as turno,
 e.id as idespecialidad,e.descripcion as especialidad,
 tu.id as idtipousuario,tu.descripcion as tipousuario
 FROM usuarios as u
LEFT JOIN  tipo_usuarios as tu ON u.tipo_usuarios_id=tu.id
LEFT JOIN  turnos as t ON u.turnos_id=t.id
LEFT JOIN  especialidades as e ON u.especialidades_id=e.id
";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="info">
 				<th>Nombres</th>
 				<th>Apellidos</th>
 				<th>Código Universidad</th>
 				<th>DNI</th>
 				<th>Usuario</th>
 				<th>Correo</th>
 				<th>Fecha Creación</th>
 				<th>Estado</th>
 				<th>Acciones</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($row = mysqli_fetch_array($result))
         {
        ?>
		<tr>
		
		<td><?php echo $row['nombres']; ?></td>
		<td><?php echo $row['apellidos']; ?></td>
		<td><?php echo $row['codigo_universidad']; ?></td>
		<td><?php echo $row['dni']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo $row['correo']; ?></td>
		<td><?php echo $row['fecha_creacion']; ?></td>
		<td><?php echo $row['estado']; ?></td>
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>"
		data-codigo="<?php echo $row['codigo_universidad']?>" 
	    data-nombres="<?php echo $row['nombres']?>" 
		data-apellidos="<?php echo $row['apellidos']?>"
		data-dni="<?php echo $row['dni']?>"
		data-usuario="<?php echo $row['user']?>"
		data-contrasena="<?php echo $row['pass']?>"
		data-fecha_nacimiento="<?php echo $row['fecha_nacimiento']?>"
		data-telefono="<?php echo $row['telefono']?>"
		data-correo="<?php echo $row['correo']?>"
		data-ciclo="<?php echo $row['ciclo']?>"
		data-cargo="<?php echo $row['cargo']?>"
		data-comentario="<?php echo $row['comentario']?>"
		data-fecha_nacimiento="<?php echo $row['fecha_nacimiento']?>"
		data-idestado="<?php echo $row['idestado']?>"
		data-estado="<?php echo $row['estado']?>"
        data-acceso="<?php echo $row['acceso']?>"
		data-idacceso="<?php echo $row['idacceso']?>"
		data-turno="<?php echo $row['turno']?>"
		data-idturno="<?php echo $row['idturno']?>"
		data-especialidad="<?php echo $row['especialidad']?>"
		data-idespecialidad="<?php echo $row['idespecialidad']?>"
		data-tipousuario="<?php echo $row['tipousuario']?>"
		data-idtipousuario="<?php echo $row['idtipousuario']?>"


		>
		<i class='glyphicon glyphicon-edit'></i> Modificar</button>
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