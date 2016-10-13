<?php include('../../../config.php'); ?>
<?php include('../../../includes/bd/conexion.php'); ?>
<?php include('../../session.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Autores</title>
<?php include('../../../templates/enlaces/principal.php'); ?>
<?php include('../../../templates/enlaces/datatables.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('../../nav.php'); ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
	<div class="panel-heading">
	Lista de Autores
	</div>
	<div class="panel-body">
	<?php include('../../templates/grid/mantenimientos/autores.php'); ?>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>