$(document).ready(function(){

   $("#alumno").click(function(evento){
      evento.preventDefault();
      $("#panel-creacion").load("templates/form/creacion-cuenta/alumno.php");
   });

   $("#docente").click(function(evento){
      evento.preventDefault();
      $("#panel-creacion").load("templates/form/creacion-cuenta/docente.php");
   });

   $("#administrativo").click(function(evento){
      evento.preventDefault();
      $("#panel-creacion").load("templates/form/creacion-cuenta/administrativo.php");
   });


 $("#egresado").click(function(evento){
      evento.preventDefault();
      $("#panel-creacion").load("templates/form/creacion-cuenta/egresado.php");
   });

 $("#default").click(function(evento){
      evento.preventDefault();
      $("#panel-creacion").load("templates/form/creacion-cuenta/default.php");
   });


})