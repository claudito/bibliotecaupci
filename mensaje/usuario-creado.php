<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuario Creado</title>
<?php include('../templates/enlaces/principal.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<br>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Confirmación de creación de Usuario <i class="glyphicon glyphicon-user"></i></h3>
	</div>
	<div class="panel-body">
		<h1>
		<p>Sus datos fueron enviados al administrador de la biblioteca,para que pueda ser validado.</p>
		<p>Tiene que acercarse a la biblioteca para confirmar sus datos.</p>
		</h1>
	</div>
	<div class="panel-footer">
	<a href="<?php echo PATH; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i>  Regresar al inicio</a>
	</div>
</div>
</div>
</div>
</div>
	
</body>
</html>