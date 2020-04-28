<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/formulario.css">
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
      <h4 align="center">Formulario de Registro</h4>
      <hr>
      <p align="center"> Porfavor contesta el siguiente
      formulario</p>
      <section id="formulario">
        <form action="practica3.php" name="registro" id="registro">
          <!--<label for="">Nombre:</label>-->
          <input type="text" name="nombre" placeholder="nombre" required="" class="cajas">
          <input type="text" name="apellidop" placeholder="Apellido Paterno" required="" class="cajas">
          <input type="text" name="aoellidom" placeholder="Apellido Materno" required="" class="cajas">
          <label>Fecha de nacimiento</label>
          <input type="date" name="fechan" required="">
          <select name="grupo" required="">
            <option value="">Selecciona un grupo</option>
            <option value="607">607</option>
            <option value="608">608</option>
            <option value="407">407</option>
          </select>
          <select name="carrera" required="">
            <option value="">Selecciona una carrera</option>
            <option value="INFORMATICA">Informática</option>
            <option value="CONTABILIDAD">Contabilida</option>
            <option value="ALIMENTOS Y BEBIDAS">Alimentos y Bebidas</option>
            <option value="HOSPITALIDAD TURISTICA">Hospitalidad Turistica</option>
          </select>
          <input type="text" name="matricula" placeholder="matricula" required="" class="cajas">
          <input type="password" name="password" placeholder="contraseña" required="" class="cajas">
          <input type="email" name="correo" placeholder="correo institucional" required="" class="cajas">
          <input type="submit" name="" value="Registrar" required="" class="botones">
          <input type="reset" name="Borrar" class="botones">
        </form>
        <hr>
        <p align="center">Por favor dale <button name="btn-funcion" onclick="mensaje();" id="boton">click</button> </p>
      </section>
      <script>
      function mensaje(){
        alert("Bienvenidos al mundo de la web");
      }
      </script>

  </body>
</html>
