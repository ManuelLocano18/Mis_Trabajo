<?php
  include 'includes/conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css"><!--Aqui llame a las librerias que vamos a ocupar de estilo-->
    <title>JMRL-Registro</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script><!--use estos script para que mi pagina web sea responsive con
      funciones de javascript-->
  </head>
  <body>
    <!--Aqui inicia mi barra de navegacion-->
    <?php include 'includes/barraf.php' ?>
      <!--Aqui termina mi barra de navegacion-->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container p-3 ">
        <div class="jumbotron text-white bg-dark mb-3">
          <h1 class="display-4" align="center">¡Registrate!</h1>
          <p class="lead" align="justify">Lllena el formulario para registrarte en el sitio.</p>
          <hr class="my-4">
          <form action="" method="POST">
            <div class="container-group">
                <label for="">Nombre:</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <br>
            <div class="container-group">
                <label for="">Ingresa un nombre de usuario:</label>
                <input type="text" name="usuario" class="form-control" placeholder="Nombre de ususario" required>
            </div>
            <br>
            <div class="container-group">
                <label for="">Ingresa una contraseña:</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Resgistrate</button>
          </form>
        </div>
 </div>
 <?php echo $mensaje; ?>

<br>
<!--Empieza la parte inferior y final de mi pagina-->
<footer>

  <div class="container-footer-all">

    <div class="container-body">

      <div class="colum1">
        <h2>Mas información</h2>

        <p>Este sitio web lo cree
          con el proposito de fomentar
          la curiosidad, investigacion
          y conocimiento ya sea para
          cualquier persona.


        </p>
      </div>


      <div class="colum2">
        <h2>Redes Sociales</h2>

        <div class="row1">
          <img src="img/facebook.png">
          <label><a href="">Sigueme en Facebook</a></label>

        </div>
        <div class="row1">
          <img src="img/instagram.png">
          <label><a href="">Sigueme en Instagram</a></label>

        </div>
      </div>
      <div class="colum3">

        <h2>Informacion de Contacto</h2>

        <div class="row2">

          <img src="img/casa.png">
          <label>Barrio Dangu,
            Santa María Maztla,
            jILOTZINGO, Méx.</label>

        </div>

        <div class="row2">
          <img src="img/telefono-inteligente.png">
          <label>55-54-60-98-30</label>

        </div>

        <div class="row2">
          <img src="img/email.png">
          <label>rangellocano@gmail.com</label>

        </div>

      </div>
    </div>



  </div>

  <div class="container-footer">
    <div class="footer">
      <div class="copyright">
        @ 2020 Todos los Derechos Reservados |
        <a href="#">JMRL</a>

      </div>

    </div>

  </div>

</footer>
<!--Termina el footer-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
  </body>
</html>
