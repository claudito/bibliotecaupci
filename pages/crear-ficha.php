<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crear Ficha</title>
<?php 	include('../templates/enlaces/principal.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('../templates/nav/usuario.php'); ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Ficha de entrega de libro o tesis</h3>
	</div>
	<div class="panel-body">
	<form action="ficha" class="form-horizontal" method="POST">
		
	<div class="form-group">
	<label  class="col-sm-2 control-label">Documento:</label>
	<div class="col-sm-10">
	<select name="" id="" class="form-control" required="">
	<option value="">[Seleccionar]</option>
	<option value="">Desarrollo de Aplicaciones web con PHP</option>
	<option value="">Desarrollo de Aplicaciones Moviles</option>
	<option value="">Desarrollo de una Aplicación Web para la mejora de procesos de la empresa Oveprime</option>
	</select>
	</div>
	</div>
   
   <div class="form-group">
	<label  class="col-sm-2 control-label">Fecha:</label>
	<div class="col-sm-2">
	<input type="date" name="" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
	</div>
	</div>
  
	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-primary">Crear Ficha</button>
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