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

  <div>

  <form action="" method="post">

  <h3>Registrar Planteles </h3>

  <h4>Nombre del plantel </h4>
  <input type="text" name="nombrePlantel" id="nombrePlantel">

  <h4>Clave del plantel</h4>
  <input type="text" name="clavePlantel" id="clavePlantel">

  <h4>Ubicacion del plantel</h4>
  <input type="text" name="localidadPlantel" id="localidadPlantel">

  <input type="submit" value="Registrar" name="registrarPlantel">

  </form>
  </div>

  </div>
</body>
</html>

<?php

include("registroDatosPlanteles.php");
?>