	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../modal/prestamo_cabinas/grid.php',
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
  var button      = $(event.relatedTarget) // Botón que activó el modal
  var comentario      = button.data('comentario')
  var horainicio      = button.data('horainicio')
  var horafin         = button.data('horafin')
  var usuario         = button.data('usuario')
  var cabina          = button.data('cabina')
  var id              = button.data('id') // Extraer la información de atributos de datos
    
		  var modal = $(this)
		  modal.find('.modal-title').text('Actualizar Información')
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #horainicio').val(horainicio)
		  modal.find('.modal-body #horafin').val(horafin)
		  modal.find('.modal-body #comentario').val(comentario)
		  modal.find('.modal-body #cabina').val(cabina)
		  modal.find('.modal-body #usuario').val(usuario)
		 
		 
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
					url: "../procesos/prestamo_cabinas/modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax").html(datos);
					$('#dataUpdate').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../procesos/prestamo_cabinas/agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax").html(datos);
					$('#dataRegister').modal('hide');
					load(1);
					$(":time").each(function(){	   /*Limpiar input:text*/
					$($(this)).val('');
					});
					$(":textarea").each(function(){	/*Limpiar input:password*/
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
					url: "../procesos/prestamo_cabinas/eliminar.php",
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