<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content-all">
      <header></header>
      <input type="checkbox" id="check">
      <label for="check" class="icon-menu">Menu</label>
      <nav class="menu">
        <ul>
          <a href="registroAlumnos.php.">
            <li>Alumnos</li>
          </a>
          <a href="registroPlanteles.php">
            <li>Planteles</li>
          </a>
          <a href="registroPrograma.php">
            <li>Registrar tipo de Programa </li>
          </a>
          <a href="../index.html"> 
          <li>Cerrar Sesion</li>
          </a>

        </ul>
      </nav>
    </div>
    <?php
    $link = mysqli_connect("localHost", "root", "");
  if ($link) {
    mysqli_select_db($link, "sistemabecario");
    mysqli_query($link, "SET NAMES 'utf0'");
  }

  ?>
  <form action="" method="post" id="formPrincipalRegistro" >
    <div>
      <h3>Programas </h3>
      <h4>Tipo de Programa</h4>
      <select name="tipoProgra" id="" require>
        <option name="tipoProgra" value="0">Seleccione Uno</option>
        <option name="tipoProgra" value="Practicas Profesionales">Practicas Profesionales</option>
        <option name="tipoProgra" value="Servicio Social "> Servicio Social</option>
        <option name="tipoProgra" value="Residencia "> Residencia</option>
      </select>

      <h4>Fecha de incio del servicio del becario</h4>
      <input type="date" name="fechaInicioBeca" id="fechaInicioBeca">
      <h4>Fecha limite del servicio del becario</h4>
      <input type="date" name="fechaFinBeca" id="fechaFinBeca">
      <h4>Horas por cubrir</h4>
      <input type="text" name="horasCubrir" id="horasCubir">
      <h4>Seleccione de que plantel es este Programa</h4>


      <select name="clavePlantel" id="" require>
        <option value="">Planteles Disponibles</option>
        <?php
        $v = mysqli_query($link, "SELECT * FROM planteles");
        while ($planteles  = mysqli_fetch_row($v)) {
        ?>
          <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
        <?php } ?>
      </select>

  

          <br><br>
      <input type="submit" value="Registrar" name="enviaPrograma" />

    </div>


  </form>


  </body>
</html>


<?php

include("registroDatosPrograma.php");


?>