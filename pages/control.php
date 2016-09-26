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
		<h3 class="panel-title">Control:</h3>
	</div>
	<div class="panel-body">

		
	 <div class="form-group">
	 <label for="">Usuario</label>
	 <select name="" class="form-control">
	 <option value="">[SELECCIONAR]</option>
	 <option value="">ALUMNO</option>
	 <option value="">DOCENTE</option>
	 <option value="">ADMINISTRATIVOS</option>
	 <option value="">EGRESADO</option>
	 <option value="">POST GRADO</option>
	 <option value="">OTRA FACULTAD</option>
	 <option value="">EXTERNO</option>
	 </select>
	 </div>

      <div class="form-group">
	 <label for="">CLASIFICACIÓN</label>
	 <select name="" class="form-control">
	 <option value="">[SELECCIONAR]</option>
	 <option value="">000</option>
	 <option value="">100</option>
	 <option value="">200</option>
	 <option value="">300</option>
	 <option value="">400</option>
	 <option value="">500</option>
	 <option value="">600</option>
	 <option value="">700</option>
	 <option value="">800</option>
	 <option value="">900</option>
	 </select>
	 </select>
	 </select>
	 </div>

	 <div class="form-group">
	 <label for="">TIPO</label>
	 <select name="" class="form-control">
	 <option value="">[SELECCIONAR]</option>
	 <option value="">PRESTAMO</option>
	 <option value="">CONSULTA</option>
	 <option value="">DEVOLUCION</option>
	 </select>
	 </div>
	  <div class="form-group">
	 <label for="">SALA</label>
	 <select name="" class="form-control">
	 <option value="">[SELECCIONAR]</option>
	 <option value="">LECTURA 1</option>
	 <option value="">LECTURA 2</option>
	 </select>
	 </div>

	 <div class="form-group">
	 <label for="">Fecha</label>
	 <input type="date" class="form-control">
	 </div>

    <button class="btn btn-primary">Registrar</button>



	
	</div>
</div>

<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr class="success">
			<th>USUARIO</th>
			<th>CLASIFICACION</th>
			<th>TIPO</th>
			<th>SALA</th>
			<th>FECHA</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ALUMNO</td>
			<td>000</td>
			<td>CONSULTA</td>
			<td>LECTURA 1</td>
			<td>02/06/2016</td>
		</tr>
		<tr>
			<td>DOCENTE</td>
			<td>006</td>
			<td>PRESTAMO</td>
			<td>LECTURA 1</td>
			<td>02/07/2016</td>
		</tr>
		<tr>
			<td>EXTERNO</td>
			<td>007</td>
			<td>DEVOLUCION</td>
			<td>LECTURA 2</td>
			<td>02/06/2016</td>
		</tr>
	</tbody>
</table>


</div>
</div>
</div>
</body>
</html>