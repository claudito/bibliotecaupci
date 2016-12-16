<form id="guardarDatos" autocomplete="Off">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="exampleModalLabel">Agregar Usuario</h4>
</div>
<div class="modal-body">
<div id="datos_ajax_register"></div>

<div class="row">
<div class="col-md-6">

<div class="form-group">
 <label for="">Nombres:</label>
 <input type="text" name="nombres" id="" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>

<div class="form-group">
 <label for="">Apellidos:</label>
 <input type="text" name="apellidos" id="" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
 <label for="">Código</label>
 <input type="text" name="codigo" id="" class="form-control input-sm" max="11">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
 <label for="">Dni</label>
 <input type="text" name="dni" id="" class="form-control input-sm" required="" max="8">
</div>
</div>
</div>




<div class="form-group">
 <label for="">Usuario:</label>
 <input type="text" name="usuario" id="" class="form-control input-sm" required="">
</div>

<div class="form-group">
 <label for="">Contraseña:</label>
 <input type="password" name="contrasena" id="" class="form-control input-sm" required="">
</div>

<div class="form-group">
 <label for="">Correo:</label>
 <input type="email" name="correo" id="" class="form-control input-sm" required="">
</div>
  
</div>
<div class="col-md-6">

<div class="form-group">
 <label for="">Fecha de Nacimiento:</label>
 <input type="date" name="fecha_nac" id="" class="form-control input-sm" required="">
</div>

<div class="row">
 <div class="col-md-6">
   <div class="form-group">
 <label for="">Ciclo:</label>
 <input type="number"  name="ciclo" min="1"  max="10" id="" class="form-control input-sm" required="">
</div>
 </div>
 <div class="col-md-6">
   <div class="form-group">
 <label for="">Turno:</label>
 <select name="turno" id="" class="form-control input-sm" required="">
 <option value="">[Seleccionar]</option>
<?php foreach ($lista_turnos as $turnos): ?>
  <option value=" <?php echo $turnos['id']; ?>"> <?php echo $turnos['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>
 </div>
</div>

<div class="form-group">
 <label for="">Especialidad:</label>
  <select name="especialidad" id="" class="form-control input-sm" required="">
 <option value="">[Seleccionar]</option>
<?php foreach ($lista_especialidad as $especialidad): ?>
  <option value=" <?php echo $especialidad['id']; ?>"> <?php echo $especialidad['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>

<div class="form-group">
 <label for="">Tipo Usuario</label>
 <select name="tipo" id="" class="form-control input-sm" required="">
 <option value="">[Seleccionar]</option>
<?php foreach ($lista_tipo_usuarios as $tipo_usuarios): ?>
  <option value=" <?php echo $tipo_usuarios['id']; ?>"> <?php echo $tipo_usuarios['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>

<div class="form-group">
 <label for="">Telefóno</label>
 <input type="text" name="telefono" id="" class="form-control input-sm" required="">
</div>

<div class="form-group">
 <label for="">Cargo</label>
 <input type="text" name="cargo" id="" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>



  
</div>
</div>
 






</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-primary">Guardar datos</button>
</div>
</div>
</div>
</div>
</form>