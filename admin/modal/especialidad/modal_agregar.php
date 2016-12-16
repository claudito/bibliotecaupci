<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Especialidad</h4>
      </div>
      <div class="modal-body">
          <div id="datos_ajax_register"></div>
    
          <div class="form-group">
          <label class="control-label">Especialidad:</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" required maxlength="100" onchange="Mayusculas(this)">
          </div>

          <div class="form-group">
          <label class="control-label">Facultad</label>
          <select name="tipo" id="tipo" class="form-control" required="">
          <option value="">[Seleccionar]</option>
          <?php foreach ($data as $tipo_usuario): ?>
          <option value="<?php echo $tipo_usuario['id'] ?>"><?php echo $tipo_usuario['descripcion'] ?></option>             
          <?php endforeach; ?>

          </select>
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