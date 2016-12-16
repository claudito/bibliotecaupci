	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../modal/autores/grid.php',
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
  var tipo        = button.data('tipo') // Extraer la información de atributos de datos
  var id          = button.data('id') // Extraer la información de atributos de datos
  var idtipo      = button.data('idtipo') // Extraer la información de atributos de datos
  var descripcion = button.data('descripcion') // Extraer la información de atributos de datos
     
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Autor: '+descripcion)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #tipo').val(tipo)
		  modal.find('.modal-body #idtipo').val(idtipo)
		  modal.find('.modal-body #descripcion').val(descripcion)

		 
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
					url: "../procesos/autores/modificar.php",
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
					url: "../procesos/autores/agregar.php",
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
					$("#idtipo option:first-child").attr("selected",true); 
					/*Limpiar select*/
				
					
				  }
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../procesos/autores/eliminar.php",
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