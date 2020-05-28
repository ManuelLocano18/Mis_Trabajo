<?php
$mensaje ="";
$servidor = "localhost";
$usuario = "manuel";
$password = "m@nuelchiv@s111*";
$bd = "jmrl";
$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if ($conecta->connect_error) {
  die('Error al conectar la base de datos'.$conecta->connect_error);
}
else {
  $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Genial!</strong> La conexion a la base de datos es correcta.
            <button type='button' class='close' data-dismiss='alert' aria-label='close'>
            <span aria-hidden='true'>&times;</span>
            </button>
  </div>";
}
?>
