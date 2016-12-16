<a class="btn btn-success" data-toggle="modal" href='#modal-id'>
<i class="glyphicon glyphicon-user"></i>
Crear Cuenta
</a>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Crear Cuenta <i class="glyphicon glyphicon-user"></i></h4>
			</div>
			<form action="procesos/Usuario/registrar.php" method="POST" autocomplete="Off">
			<div class="modal-body">
			
			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">
            
            <div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Seleccione su Tipo de usuario que le corresponda <i class="glyphicon glyphicon-user"></i>.</strong>
			</div>

			<div class="form-group">
			<select name="tipo" id="" class="form-control" required>
			<option value="">Tipo de usuario</option>
			<?php 
            $db     = new Conexion();
            $query  = "SELECT * FROM tipo_usuarios";
            $result = $db->query($query);
            while ($fila = mysqli_fetch_object($result))
             {
              echo "<option value='$fila->id'>$fila->descripcion</option>";
             } 
			 ?>
			</select>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label>Nombres:</label>
			<input type="text" name="nombres" class="form-control" required onchange="Mayusculas(this)">
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label>Apellidos:</label>
			<input type="text" name="apellidos" class="form-control"
			 onchange="Mayusculas(this)" required>	
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label>Correo Electrónico:</label>
			<input type="email" name="correo" class="form-control"  required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label>Celular o Telefóno:</label>
			<input type="text" name="telefono" class="form-control" onchange="Mayusculas(this)" required>
			</div>	
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label>Código Universidad:</label>
			<input type="text" name="codigo" maxlength="11" class="form-control" onchange="Mayusculas(this)" required>
			</div>
			</div>
			
			</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Crear Cuenta</button>
			</div>
		</form>
		</div>
	</div>
</div>