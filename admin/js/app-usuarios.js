	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../modal/usuarios/grid.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../assets/img/loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	
		$('#dataUpdate').on('show.bs.modal', function (event) {
  var button          = $(event.relatedTarget) // Botón que activó el modal
  var id              = button.data('id') 
  var codigo          = button.data('codigo') 
  var nombres         = button.data('nombres') 
  var apellidos       = button.data('apellidos')
  var dni             = button.data('dni')
  var usuario         = button.data('usuario')
  var contrasena      = button.data('contrasena')
  var telefono        = button.data('telefono')
  var correo          = button.data('correo')
  var cargo           = button.data('cargo')
  var ciclo           = button.data('ciclo')
  var fecha_nacimiento= button.data('fecha_nacimiento')
  var idestado        = button.data('idestado')
  var estado          = button.data('estado')
  var idacceso        = button.data('idacceso')
  var acceso          = button.data('acceso')
  var idturno         = button.data('idturno')
  var turno           = button.data('turno')
  var idespecialidad  = button.data('idespecialidad')
  var especialidad    = button.data('especialidad')
  var idtipousuario   = button.data('idtipousuario')
  var tipousuario     = button.data('tipousuario')

		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Usuario: '+nombres+' '+apellidos)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #nombres').val(nombres)
		  modal.find('.modal-body #apellidos').val(apellidos)
		  modal.find('.modal-body #dni').val(dni)
		  modal.find('.modal-body #usuario').val(usuario)
		  modal.find('.modal-body #contrasena').val(contrasena)
		  modal.find('.modal-body #fecha_nacimiento').val(fecha_nacimiento)
		  modal.find('.modal-body #telefono').val(telefono)
		  modal.find('.modal-body #correo').val(correo)
		  modal.find('.modal-body #cargo').val(cargo)
		  modal.find('.modal-body #ciclo').val(ciclo)
		  modal.find('.modal-body #fecha_nacimiento').val(fecha_nacimiento)
modal.find('.modal-body #idestado').val(idestado)
modal.find('.modal-body #estado').append('<button class="btn btn-xs btn-success">'+estado+'</button>')
modal.find('.modal-body #idacceso').val(idacceso)
modal.find('.modal-body #acceso').append('<button class="btn btn-xs btn-success">'+acceso+'</button>')
modal.find('.modal-body #idturno').val(idturno)
modal.find('.modal-body #turno').append('<button class="btn btn-xs btn-success">'+turno+'</button>')
modal.find('.modal-body #idespecialidad').val(idespecialidad)
modal.find('.modal-body #especialidad').append('<button class="btn btn-xs btn-success">'+especialidad+'</button>')
modal.find('.modal-body #idtipousuario').val(idtipousuario)
modal.find('.modal-body #tipousuario').append('<button class="btn btn-xs btn-success">'+tipousuario+'</button>')




 		  $('.alert').hide();//Oculto alert



		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id').val(id)
		})

	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../procesos/usuarios/modificar.php",
					data: parametros,
					 beforeSend: function(objeto){

						$(".datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax").html(datos);
					$('#dataUpdate').modal('hide');
					load(1);
					$('#acceso').empty();
					$('#estado').empty();
					$('#turno').empty();
					$('#acceso').empty();
					$('#especialidad').empty();
					$('#tipousuario').empty();






				   
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../procesos/usuarios/agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax").html(datos);
					$('#dataRegister').modal('hide');
					load(1);
					$(":text").each(function(){	   /*Limpiar input:text*/
					$($(this)).val('');
					});
					$(":password").each(function(){	/*Limpiar input:password*/
					$($(this)).val('');
					});	
					$("#idtipo option:first-child").attr("selected",true); /*Limpiar select*/
				
					
				  }
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../procesos/usuarios/eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax").html(datos);
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});



	$('#dataUpdate').on('hidden.bs.modal', function (event) {


		$('#acceso').empty();
		$('#estado').empty();
		$('#turno').empty();
		$('#acceso').empty();
		$('#especialidad').empty();
		$('#tipousuario').empty();

		});