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
<div class="col-md-3">
</div>
<div class="col-md-5">
<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">
    <strong>
    Ficha: BIBLIOTECA "Ing. Julio Larrea Galarza".
    </strong>   
    </h3>
	</div>
	<div class="panel-body">
	<center>
	<img src="<?php echo PATH; ?>/assets/img/logoupci.png" img="img-responsive"  alt="" width="300">
	</center>
  <hr>
    <ul>
    <li>Autor: Juan Perez</li>
    <li>Titulo: Desarrollo de Aplicaciones Móviles.</li>
    <ul>
    <li>Clasificación Dewey: 657.45</li>
    <li>Código Autor: M22</li>
    <li>Año Libro: 2012</li>
    </ul>
    <li>Alumno: Luis Claudio Ponce</li>
    <li>Código Alumno: 1107000044</li>
    <li>Ciclo Academico: 9</li>
    <li>Turno: Noche</li>
    <li>Carrera: Ingenieria de Sistemas</li>
    <li>Fecha de Pedido: <?php echo date('d-m-Y'); ?></li>
    </ul>
    <hr>
   <br>
    <center>___________</center>
    <center>Firma</center>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>