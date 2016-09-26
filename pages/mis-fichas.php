<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Fichas</title>
<?php   include('../templates/enlaces/principal.php'); ?>
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
    <h3 class="panel-title">Mis Fichas</h3>
    </div>
    <div class="panel-body">
     <?php include('../templates/grid/mis-fichas.php'); ?>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>