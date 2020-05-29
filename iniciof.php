<?php
session_start();
include 'includes/conexion.php';
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css"><!--Aqui llame a las librerias que vamos a ocupar de estilo-->
    <title>JMRL-Inicio</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script><!--use estos script para que mi pagina web sea responsive con
      funciones de javascript-->
  </head>
  <body>
    <!--Aqui inicia mi barra de navegacion-->
    <?php include 'includes/barras.php' ?>
      <!--Aqui termina mi barra de navegacion-->
      <!--Coloque una imagen que da una introduccion de lo que habla mi blog-->

        <div class="jumbotron text-white bg-dark mb-3">
          <h1 class="display-4" align="center">¡Bienvenido: <?php echo $usuario; ?>!</h1>
          <p class="lead" align="justify"></p>
        </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>El universo</h1>
        <h3><p>Este es mi blog donde hablo sobre el universo.</p></h3>
      </div>
    </div>
  </div>
  <br>
  <br>
  <!--Aqui termina la imagen-->
  <!--Tarjetas con informacion-->
  <div class="card-deck">
  <div class="card text-white bg-dark mb-3 ">
    <img src="img/galax.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" align="center">Las Galaxias</h5>
      <p class="card-text" align="justify">Las galaxias. ¿Qué es una galaxia? ¿De que estan hechas?.</p>
      <a class="btn btn-secondary" href="#" role="button">Saber más</a>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3">
    <img src="img/uni.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" align="center">¿El universo rota?</h5>
      <p class="card-text" align="justify">Si miras alrededor del cosmos, verás que está compuesto de muchos ingredientes.....</p>
      <a class="btn btn-secondary" href="#" role="button">Saber más</a>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3">
    <img src="img/tierra.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" align="center">¿Realmente estamos solos en el universo?</h5>
      <p class="card-text" align="justify">Una de las mayores preguntas que nos hacemos todos es acerca sobre nuestro....</p>
      <a class="btn btn-secondary" href="#" role="button">Saber más</a>
    </div>
  </div>
</div>
<br>
<br>
<!--Terminan las tarjetas-->
<!--Empieza la galeria-->
<section width="95" height="100">
  <div class="col-lg-12 col-md-12 col-sm-12 bg-dark mb-3" id="galeria">
    <div id="galeria_imagen" align="center">
        <h3 class="card-title" align="center">¡Selecciona una de las imagenes de abajo!</h3>
      <img src="img/img6.jpg" alt="imagen1" id="imgGaleria" class="img-fluid">
    </div>
    <div id="galeria_miniatura" align="center">
      <img class="miniaturas rounded-circle" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/img2.jpg">
      <img class="miniaturas rounded-circle" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/img3.jpg">
      <img class="miniaturas rounded-circle" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/img4.jpg">
      <img class="miniaturas rounded-circle" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/img5.jpg">

    </div>
  </div>
</section>
<br>
<br>
<!--Termina la galeria-->
<!--Pequeñas tarjetas con datos curioso y prequeños del universo-->
<div class="card mb-3 text-white bg-dark mb-3" style="max-width: 1500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/uno.jpg" class="card-img" width="95" height="200">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">El universo abarca un diámetro de 150 mil millones de años luz</h5>
        <p class="card-text" align=justify>Eso mismo: medidas actuales creen que el universo tiene un diámetro de aproximadamente 150 mil millones de años luz, aunque se expande cada vez más. Aunque parece poco lógico teniendo en cuenta la edad del Universo, debemos saber que se está expandiendo a una velocidad cada vez mayor y al parecer jamas dejara de crecer.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 text-white bg-dark mb-3" style="max-width: 1500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/gali.jpg" class="card-img" width="95" height="200">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">Las galaxias buscan separarse lo más posible una de la otra</h5>
        <p class="card-text" align=justify>Las galaxias se están separando la una de la otra a un ritmo cada vez más acelerado, lo que lleva a la conclusión de que, probablemente, el universo podría finalizar en el llamado Big Rip, un desgarro del mismo. Los científicos que creen en este final tan catastrófico se basan en la idea de que esta expansión no podrá seguir por siempre.</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 text-white bg-dark mb-3" style="max-width: 1500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/centro.jpg" class="card-img" width="95" height="200">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" align="center">No hay un centro del universo</h5>
        <p class="card-text" align=justify>No es ni la Tierra, ni ningún otro planeta, galaxia ni nada en particular. El universo no tiene centro, y si lo tuviera no sería ni nuestro planeta ni nuestra galaxia.</p>
      </div>
    </div>
  </div>
</div>
<br>
<!--Terminan las tarjetas de datos curiosos-->
<!--Empieza tabla-->
<table class="table table-bordered table-dark table-responsive-lg table-responsive-md table-responsive-sm">
  <thead>
    <tr>
      <th scope="col"><p align="center">Cuerpos mas grandes de nuestro sistema solar del mas grande al mas pequeño</p></th>
    </tr>
  </thead>
</table>
<table class="table table-bordered table-dark table-responsive-lg table-responsive-md table-responsive-sm">
  <thead>
    <tr>
      <th scope="col">Puesto</th>
      <th scope="col">Cuerpo</th>
      <th scope="col">Radio (km)</th>
      <th scope="col">Masa (10**21 km**3)</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sol</td>
      <td>696,342</td>
      <td>1,988,550,000</td>
      <td>Estrella</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jupiter</td>
      <td>69,911</td>
      <td>1,898,600</td>
      <td>Planeta(gigante gaseoso)</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Saturno</td>
      <td>58,232</td>
      <td>568,460</td>
      <td>Planeta(gigante gaseoso)</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Urano</td>
      <td>25,362</td>
      <td>86,832</td>
      <td>Planeta(gigante gaseoso helado)</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Neptuno</td>
      <td>24,622</td>
      <td>102,430</td>
      <td>Planeta(gigante gaseoso helado)</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Tierra</td>
      <td>6371.0</td>
      <td>5,973</td>
      <td>Planeta(terrestre)</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Venus</td>
      <td>6051.8</td>
      <td>4,868.5</td>
      <td>Planeta(terrestre)</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Marte</td>
      <td>3389.5</td>
      <td>641.85</td>
      <td>Planeta(terrestre)</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Ganimedes(Luna de Jupiter)</td>
      <td>2634.1</td>
      <td>148.2</td>
      <td>Luna de jupiter</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Titan(Luna de Saturno)</td>
      <td>2574.73</td>
      <td>134.5</td>
      <td>Luna se Saturno</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Mercurio</td>
      <td>2439.7</td>
      <td>880.2</td>
      <td>Planeta(terrestre)</td>
    </tr>
  </tbody>
</table>
<br>
<!--Termina mi tabla-->
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
