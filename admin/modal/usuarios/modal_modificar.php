<form id="actualidarDatos" name="actualizarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="exampleModalLabel">Actualizar</h4>
</div>
<div class="modal-body">
<div id="datos_ajax"></div>

<input type="hidden" class="form-control" id="id" name="id">

<div class="row">
<div class="col-md-6">

<div class="form-group">
 <label for="">Nombres:</label>
 <input type="text" name="nombres" id="nombres" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>

<div class="form-group">
 <label for="">Apellidos:</label>
 <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
 <label for="">Código</label>
 <input type="text" name="codigo" id="codigo" class="form-control input-sm" 
 maxlength="10" readonly="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
 <label for="">Dni</label>
 <input type="text" name="dni" id="dni" class="form-control input-sm" required="" 
 maxlength="8">
</div>
</div>
</div>


<div class="form-group">
 <label for="">Usuario:</label>
 <input type="text" name="usuario" id="usuario" class="form-control input-sm" required="" readonly="">
</div>

<div class="form-group">
 <label for="">Contraseña:</label>
 <input type="password" name="contrasena" id="contrasena" class="form-control input-sm" required="">
</div>

<div class="form-group">
 <label for="">Correo:</label>
 <input type="email" name="correo" id="correo" class="form-control input-sm" required="">
</div>

<div class="form-group">
<div id="acceso"></div>
<input type="hidden" name="acceso" id="idacceso">
<select name="new_acceso" class="form-control input-sm">
<option value="">[ Seleccionar nuevo acceso ]</option>
<option value="admin">ADMINISTRADOR</option>
<option value="user">USUARIO</option>
</select>
</div>
	
</div>
<div class="col-md-6">

<div class="form-group">
 <label for="">Fecha de Nacimiento:</label>
 <input type="date" name="fecha_nac" id="fecha_nacimiento" class="form-control input-sm" required="">
</div>

<div class="row">
 <div class="col-md-4">
   <div class="form-group">
 <label for="">Ciclo:</label>
 <input type="number"  name="ciclo" min="0"  max="10" id="ciclo" class="form-control input-sm" required="">
</div>
 </div>
 <div class="col-md-8">
 <div class="form-group">
<label for=""><div id="turno"></div></label>
<input type="hidden" name="turno" id="idturno">
<select name="new_turno" class="form-control input-sm">
<option value="">[ Seleccionar nuevo Turno]</option>
<?php foreach ($lista_turnos as $turnos): ?>
  <option value=" <?php echo $turnos['id']; ?>"> <?php echo $turnos['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>
 </div>
</div>

<div class="form-group">
<label for=""><div id="especialidad"></div></label>
<input type="hidden" name="especialidad" id="idespecialidad">
<select name="new_especialidad" class="form-control input-sm">
 <option value="">[ Seleccionar nueva especialidad]</option>
<?php foreach ($lista_especialidad as $especialidad): ?>
  <option value=" <?php echo $especialidad['id']; ?>"> <?php echo $especialidad['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>

<div class="form-group">
<div id="tipousuario"></div>
<input type="hidden" name="tipousuario" id="idtipousuario">
<select name="new_tipousuario" class="form-control input-sm">
 <option value="" >[ Seleccionar nuevo tipo de usuario ]</option>
<?php foreach ($lista_tipo_usuarios as $tipo_usuarios): ?>
  <option value=" <?php echo $tipo_usuarios['id']; ?>"> <?php echo $tipo_usuarios['descripcion']; ?></option>
 <?php endforeach ?>
 </select>
</div>

<div class="form-group">
 <label for="">Telefóno</label>
 <input type="text" name="telefono" id="telefono" class="form-control input-sm" required="">
</div>

<div class="form-group">
 <label for="">Cargo</label>
 <input type="text" name="cargo" id="cargo" class="form-control input-sm" required="" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<div id="estado"></div>
<input type="hidden" name="estado" id="idestado">
<select name="new_estado" id="" class="form-control input-sm">
<option value="">[ Seleccionar nuevo estado]</option>
<option value="on">ACTIVO</option>
<option value="off">INACTIVO</option>
</select>
</div>


</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Actualizar datos</button>
</div>
</div>
</div>
</div>
</form>