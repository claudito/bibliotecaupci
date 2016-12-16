<form id="actualidarDatos" name="actualizarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Actualizar Idioma</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>

<input type="hidden" class="form-control" id="id" name="id">

<div class="form-group">
<label class="control-label">Especialidad</label>
<input type="text" class="form-control" id="descripcion" name="descripcion" required maxlength="100" onchange="Mayusculas(this)">
</div>  

<label for="">Facultad</label>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="hidden" name="tipo" id="idtipo">
<input type="text" name="" id="tipo" class="form-control" readonly="">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<select name="nuevotipo"  class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach ($data as $tipo_usuario): ?>
<option value="<?php echo $tipo_usuario['id'] ?>"><?php echo $tipo_usuario['descripcion'] ?></option>             
<?php endforeach; ?>

</select>
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