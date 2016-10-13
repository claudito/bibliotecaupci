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
      <a class="navbar-brand" href="#">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Crear Ficha <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Mis Fichas</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Biblioteca</a></li>
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Reporte de Fichas</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ingrese el autor o título" required="">
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="glyphicon glyphicon-user text-success"></i> <?php echo $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">         
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Herramientas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo PATH ?>procesos/logout">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>