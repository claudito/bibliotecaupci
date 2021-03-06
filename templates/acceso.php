<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso</title>
<?php include('templates/enlaces/principal.php'); ?>

<link rel="stylesheet" href="<?php echo PATH ?>/assets/css/estilos-login.css">

<link rel="shortcut icon" type="image/x-icon" href="<?php echo PATH ?>/assets/img/logoupci.png">

<style>
/*FONDO DE LOGIN PRINCIPAL*/
body{
background: url(<?php echo PATH; ?>/assets/img/fondo.jpg) no-repeat center center fixed;
/*http://i.imgur.com/GHr12sH.jpg)*/
}
</style>

</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?php echo PATH ?>procesos/login"  autocomplete="off">
          <img src="<?php echo PATH ?>/assets/img/logoupci.png" class="img-responsive" alt="" />
          <div class="form-group">
          <input type="text" name="usuario" placeholder="Usuario" required class="form-control input-lg"  autofocus="" maxlength="11"  />
          </div>

          
          <div class="form-group">
          <input type="password" name="contrasena" class="form-control input-lg"  placeholder="Contraseña" required=""  pattern="[a-zA-Z0-9]+" />
          </div>
          
         
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Ingresar</button>
          
        


        </form>

       <div class="crear-cuenta">
       <br>
        <?php include('templates/modal/crear-cuenta.php'); ?> 
       </div>
        
          
      </section> 

      </div>
      
    
      

  </div>
      
  
  
</div>

</body>
</html>