<?php 
//error_reporting(0);
date_default_timezone_set('America/Lima');

$key = "UPCI_BIBLIOTECA_2016"; #Key Sesion

define('PATH', 'http://biblioteca.upci.online/'); #Path SERVIDOR

//define('PATH', 'http://localhost:8080/biblioteca'); #Path LOCAL


define('SERVERBD', 'localhost');#SERVER BD MYSQL

define('USERBD', 'root'); #USER BD MYSQL

define('PASSBD', 'fqFFsVUhQI'); #PASS MYSQL SERVIDOR

define('BD','biblioteca');      #BD MYSQL

define('KEY',$key); #KEY  


#VARIABLES SESION
define('USUARIO','idusuario');        #USUARIO
define('NOMBRES','nombres');          #NOMBRES
define('APELLIDOS','apellidos');      #APELLIDOS 
define('TIPO','tipo');                #TIPO

 ?>
