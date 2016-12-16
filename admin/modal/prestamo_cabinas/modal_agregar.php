<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Nuevo Prestamo</h4>
      </div>
      <div class="modal-body">
          <div id="datos_ajax_register"></div>

        <div class="form-group">
        <label for="">Usuario:</label>
        <select name="usuario" id="idusuario" class="demo-default" required="">
        <option value="">[Seleccionar]</option>
        <?php foreach ($lista_usuarios as $usuarios): ?>
         <option value="<?php echo $usuarios['id'] ?>">
         <?php echo $usuarios['nombres'].' '.$usuarios['apellidos']; ?>
          </option> 
        <?php endforeach ?>
        </select>
        <script >
        $('#idusuario').selectize({
        maxItems: 1
        });
        </script>
        </div>

        
        <div class="form-group">
        <label for="">Cabina</label>
        <select name="cabina" id="idcabina" class="demo-default" required="">
        <option value="">[Seleccionar]</option>
        <?php foreach ($lista_cabinas as $cabinas): ?>
         <option value="<?php echo $cabinas['id'] ?>">
         <?php echo $cabinas['descripcion']; ?>
          </option> 
        <?php endforeach ?>
          
        </select>
        <script >
        $('#idcabina').selectize({
        maxItems: 1
        });
        </script>
       </div>

      
   
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           <label for="">Hora Inicio</label>
           <input type="time" name="horainicio" class="form-control" value="<?php echo date('H:i'); ?>">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="">Hora Fin</label>
        <input type="time" name="horafin" class="form-control" value="<?php echo date('H:i',strtotime('+30 minutes')) ?>">
        </div>
        </div>
        </div>

        <div class="form-group">
        <label for="">Comentario</label>
        <textarea name="comentario" id=""  rows="5" class="form-control" onchange="Mayusculas(this)"></textarea>
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