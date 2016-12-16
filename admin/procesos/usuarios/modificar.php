<?php

    # conectare la base de datos
    include('../../../config.php');
    include('../../../includes/bd/conexion.php');
    include('../../../includes/clases/Usuarios.php');
    $db     = new Conexion();  
    $id            = addslashes($_POST['id']);    
    $nombres       = addslashes($_POST['nombres']);
    $apellidos     = addslashes($_POST['apellidos']);
    $codigo        = addslashes($_POST['codigo']);
    $dni           = addslashes($_POST['dni']);
    $user          = addslashes($_POST['usuario']);
    $pass          = addslashes($_POST['contrasena']);
    $correo        = addslashes($_POST['correo']);
    $telefono      = addslashes($_POST['telefono']);
    $tipo_usuario  = addslashes($_POST['tipousuario']);
    $cargo         = addslashes($_POST['cargo']);
    $fecha_nac     = addslashes($_POST['fecha_nac']);
    $turno         = addslashes($_POST['turno']);
    $especialidad  = addslashes($_POST['especialidad']);
    $fecha_nac     = addslashes($_POST['fecha_nac']);
    $ciclo         = addslashes($_POST['ciclo']);
    $turno         = addslashes($_POST['turno']);
    $especialidad  = addslashes($_POST['especialidad']);
    $id_acceso     = addslashes($_POST['acceso']);
    $new_acceso    = addslashes($_POST['new_acceso']);
    $id_turno      = addslashes($_POST['turno']);
    $new_turno     = addslashes($_POST['new_turno']);
    $id_especialidad      = addslashes($_POST['especialidad']);
    $new_especialidad     = addslashes($_POST['new_especialidad']);
    $id_tipousuario       = addslashes($_POST['tipousuario']);
    $new_tipousuario      = addslashes($_POST['new_tipousuario']);
    $id_estado            = addslashes($_POST['estado']);
    $new_estado           = addslashes($_POST['new_estado']);
    if (empty($new_acceso))
    {
     $acceso = $id_acceso;
    } 
    else
    {
     $acceso = $new_acceso;
    }
    if (empty($new_turno))
    {
     $turno = $id_turno;
    } 
    else
    {
     $turno = $new_turno;
    }
     if (empty($new_especialidad))
    {
     $especialidad = $id_especialidad;
    } 
    else
    {
     $especialidad = $new_especialidad;
    }
      if (empty($new_tipousuario))
    {
     $tipousuario = $id_tipousuario;
    } 
    else
    {
     $tipousuario = $new_tipousuario;
    }
    if (empty($new_estado))
    {
     $estado = $id_estado;
    } 
    else
    {
     $estado = $new_estado;
    }
    

    $usuarios = new Usuarios($nombres,$apellidos,$codigo,$dni,$user,$pass,$cargo,$correo,$telefono,$fecha_nac,$ciclo,$tipousuario,$turno,$especialidad);
    $valor   = $usuarios -> Actualizar($id,$acceso,$estado); 


    
    if ($valor == 'ok')  
    {
    echo '<script>swal("Buen Trabajo", "Actualización Existosa", "success")</script>';
    }
    else if ($valor == 'error')  
    {
     echo '<script>sweetAlert("Ocurrio un error al Actualizar", "Consulte al área de soporte", "error");</script>';
    }
    else
    {
     echo '<script>sweetAlert("Ocurrio un error inesperado", "Consulte al área de soporte", "error");</script>';
    }
    
    

?>