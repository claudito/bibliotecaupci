<?php  
include('../../config.php');
include('../session.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Tipo_autores.php');

$tipo_autores = new Tipo_autores('?');
$data = $tipo_autores->lista();
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
     <title>Autores</title>
    <?php include('../../templates/enlaces/principal.php'); ?>
	  <?php include('../../templates/enlaces/datatables.php'); ?>
    <?php include('../../templates/enlaces/sweetalert.php'); ?>
  </head>
  <body>
  <?php include("../modal/autores/modal_agregar.php");?>
  <?php include("../modal/autores/modal_eliminar.php"); ?>
  <?php include("../modal/autores/modal_modificar.php"); ?>
 
    <div class="container-fluid">
      
    <div class="row">
    <div class="col-md-12">
    <?php include('../nav.php'); ?>
    </div>
    </div>


     <div class="row">
     <div class="col-md-12">
    <div class="pull-right">
     <div class="form-group">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i> Agregar Autor</button>
     </div>
    </div>
     </div>
     </div>
		
	  <div class="row">
		<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
		    Lista de  Autores
			</div>
			<div class="panel-body">

			<div id="loader" class="text-center"> <img src="../assets/img/loader.gif"></div>
			<div class="datos_ajax"></div><!-- Datos ajax Final -->
			<div class="outer_div"></div><!-- Datos ajax Final -->
			
			</div>
		</div>
		</div>
	  </div>


	</div>

	<script src="../js/app-autores.js"></script>
	<script>
		$(document).ready(function(){
			load(1);
		});
	</script>
 </body>
</html>