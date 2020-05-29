<?php
session_start();
include '../includes/conexion.php';
$usuario =$_POST['usuario'];
$password =$_POST['password'];
//consulta a la base de datos
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password'";
if ($resultado = $conecta->query($consulta)) {
  while ($row = $resultado->fetch_array()) {
    $usuariook = $row['usuario'];
    $passwordok = $row['password'];
  }
  $resultado->close();
}
  $conecta->close();
  if (isset($usuario) && isset($password)) {
    if ($usuario == $usuariook && $password == $passwordok)  {
      $_SESSION['login'] = True;
      $_SESSION['usuario'] = $usuario;
      header("location:../iniciof.php");
    }
    else {
      header("location:../login.php");
    }
  }
  else {
    header("location:../login.php");
  }
 ?>
