
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crear Cuenta</title>
<?php 	include('templates/enlaces/principal.php'); ?>
<?php   include('templates/enlaces/datatables.php'); ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('templates/nav/usuario-nuevo.php'); ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="<?php echo PATH; ?>"><img src="assets/img/logoupci.png" alt="" width="300" class="img-responsive"></a>
<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Crear Cuenta: Para acceder a la biblioteca "Ing. Julio Larrea Galarza"</h3>
	</div>
	<div class="panel-body">
	<form action="#" class="form-horizontal">

	<div class="form-group">
	<label  class="col-sm-2 control-label">Usuario</label>
	<div class="col-sm-4">
	<select name="" class="form-control" required="">
	<option value="">[Seleccionar]</option>
	<option value="">Alumno</option>
	<option value="">Profesor</option>
	</select>
	</div>
	</div>
	 
	<div class="form-group">
	<label  class="col-sm-2 control-label">Nombres</label>
	<div class="col-sm-4">
	<input type="text" name="" class="form-control" required="">
	</div>
	</div>

	<div class="form-group">
	<label  class="col-sm-2 control-label">Apellidos</label>
	<div class="col-sm-4">
	<input type="text" name="" class="form-control" required="">
	</div>
	</div>

	<div class="form-group">
	<label  class="col-sm-2 control-label">Especialidad</label>
	<div class="col-sm-4">
	<select name="" class="form-control" required="">
	<option value="">[Seleccionar]</option>
	<option value="">Contabilidad</option>
	<option value="">Ing de Sistemas</option>
	<option value="">Ing Industrial</option>
	</select>
	</div>
	</div>

	<div class="form-group">
	<label  class="col-sm-2 control-label">Dni</label>
	<div class="col-sm-4">
	<input type="number" name="" class="form-control" required="">
	</div>
	</div>

	<div class="form-group">
	<label  class="col-sm-2 control-label">Código de Alumno</label>
	<div class="col-sm-4">
	<input type="number" name="" class="form-control" required="">
	</div>
	</div>
	
	<div class="form-group">
	<label  class="col-sm-2 control-label">Turno</label>
	<div class="col-sm-4">
	<select name="" class="form-control" required="">
	<option value="">[Seleccionar]</option>
	<option value="">Mañana</option>
	<option value="">Noche</option>
	</select>
	</div>
	</div>

    <div class="form-group">
	<label  class="col-sm-2 control-label">Fecha de Nacimiento</label>
	<div class="col-sm-4">
	<input type="date" name="" class="form-control" required="">
	</div>
	</div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-primary">Registrar</button>
	</div>
	</div>



	</form>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>