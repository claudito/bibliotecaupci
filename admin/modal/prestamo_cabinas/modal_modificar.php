<form id="actualidarDatos" name="actualizarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Actualizar</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>

<input type="hidden" class="form-control" id="id" name="id">

<div class="form-group">
<label for="">Usuario:</label>
<input type="text" name="usuario" id="usuario" class="form-control" readonly="">
</div>

<div class="form-group">
<label for="">Cabina:</label>
<input type="text" name="cabina" id="cabina" class="form-control" readonly="">
</div>
   
     <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           <label for="">Hora Inicio</label>
           <input type="time" id="horainicio" name="horainicio" class="form-control" required >
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="">Hora Fin</label>
        <input type="time" id="horafin" name="horafin" class="form-control" required>
        </div>
        </div>
        </div>

        <div class="form-group">
        <label for="">Comentario</label>
        <textarea name="comentario" id="comentario"  rows="5"  required="" class="form-control" onchange="Mayusculas(this)"></textarea>
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