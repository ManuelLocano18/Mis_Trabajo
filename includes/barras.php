<!--Aqui inicia mi barra de navegacion-->
<header class="site-header">
    <nav class="navbar navbar-expand-md navbar-dark bg-steel fixed-top">
      <div class="container">
        <a href="iniciof.php"><img src="img/jmrl.png" width="95" height="95"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggle">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="perfil.php"><?php echo $usuario; ?></a>
            <a class="nav-item nav-link" href="iniciof.php">Inicio</a>
            <a class="nav-item nav-link" href="#">Noticias</a>
            <a class="nav-item nav-link" href="#">Comunidad</a>
            <a class="nav-item nav-link" href="includes/csesion.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <br>
  <br>
  <!--Aqui termina mi barra de navegacion-->
