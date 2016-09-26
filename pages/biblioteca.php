<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Biblioteca</title>
<?php 	include('../templates/enlaces/principal.php'); ?>
<?php   include('../templates/enlaces/datatables.php'); ?>
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
<?php include('../templates/nav/usuario.php'); ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Biblioteca</h3>
	<form action="" class="form-inline">
	<input type="text" class="form-control" placeholder="autor">
	<input type="text" class="form-control" placeholder="editorial">
	<input type="text" class="form-control" placeholder="año de publicación">
	<button class="btn btn-success">Buscar</button>
	</form>
	</div>
	<div class="panel-body">
	<?php include('../templates/grid/biblioteca.php'); ?>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>