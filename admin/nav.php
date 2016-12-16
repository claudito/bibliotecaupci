<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php 
       if ($_SESSION[KEY.TIPO]=='admin')
        {
          echo "<a class='navbar-brand' href='".PATH."'>Biblioteca</a>";
        } 
        else 
        {
          echo "<a class='navbar-brand' href='".PATH."admin'>Administrador</a>";
        }
       

       ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo PATH; ?>admin/pages/usuarios">Usuarios</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/tipo-usuarios">Tipos de Usuario</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo PATH; ?>admin/pages/facultades">Facultades</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/especialidad">Especialidad</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo PATH; ?>admin/pages/autores">Autores</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/tipo-autores">Tipo Autores</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo PATH; ?>admin/pages/editoriales">Editorial</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/categorias">Categoría</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/idiomas">Idiomas</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/lugar-de-publicaciones">Lugar de Publicación</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/palabras-clave">Palabras Clave</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/area-tematica">Área Temática</a></li>
          <li><a href="<?php echo PATH; ?>admin/pages/turnos">Turnos</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo PATH; ?>admin/pages/cabinas">Cabinas</a></li>
          </ul>
        </li>
      </ul>

<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Procesos<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="<?php echo PATH; ?>admin/pages/titulo-ejemplar">Crear Titulo/Ejemplar</a></li>
<li class="divider"></li>
<li><a href="#">Nuevos Usuarios</a></li>
<li class="divider"></li>
<li><a href="#">Solicitud Préstamos Documentos</a></li>
<li class="divider"></li>
<li><a href="<?php echo PATH; ?>admin/pages/prestamo-cabinas">Solicitud Préstamos Cabina</a></li>
</ul>
</li>
</ul>



<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Libros</a></li>
<li class="divider"></li>
<li><a href="">Tesis</a></li>
<li class="divider"></li>
<li><a href="">Otros Documentos</a></li>
<li class="divider"></li>
<li><a href="">Cabinas</a></li>
</ul>
</li>
</ul>

  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="glyphicon glyphicon-user text-success"></i> <?php echo $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class=""><a href="https://www.zoho.com/mail/login.html" target="_blank"><i class="glyphicon glyphicon-envelope"></i>  Correo</a></li>
            <li class="divider"></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Herramientas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo PATH; ?>procesos/logout">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>