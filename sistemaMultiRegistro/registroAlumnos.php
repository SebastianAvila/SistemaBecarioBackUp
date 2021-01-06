<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
        <a href="relacionAlumnoServicio.php">
          <li>Tipo de alumnos</li>
        </a>
        <a href="registroPrograma.php">
          <li>Registrar tipo de Programa </li>
        </a>

      </ul>
    </nav>
  </div>

  <div>
  <form action="" method="post">
  <h4>Datos becario</h4>

  <h3>Primer Nombre</h3>
  <input type="text" name="primerNomBeca" id="primerNomBeca" placeholder="Obligatorio">

  <h3>Segundo Nombre</h3>
  <input type="text" name="segundoNomBeca" id="segundoNomBeca" placeholder="Opcional*">

  <h3>Primer Apellido</h3>
  <input type="text" name="apellidoPaterBeca" id="apellidoPaterBeca" placeholder="Obligatorio*">

  <h3>Segundo Apellido</h3>
  <input type="text" name="apellidoMaterBeca" id="apellidoMaterBeca" placeholder="Obligatorii*">

  <h3>Celular a 10 digitos</h3>
  <input type="text" name="celular " id="celular" placeholder="Lada + 7 numeros restantes">

  <h3>Correo Electronico</h3>
  <input type="text" name="correoElec" id="correoElec" placeholder="corrre@jemplo.com">
<br><br>


  
      <?php
          $link = mysqli_connect("localHost", "root", "");
        if ($link) {
          mysqli_select_db($link, "sistemabecario");
          mysqli_query($link, "SET NAMES 'utf0'");
        }
      ?>
<h3>Plantel de procedencia</h3>
  <select name="clavePlantel" id="clavePlantel" require>
        <option value="">Planteles Disponibles</option>
        <?php
        $v = mysqli_query($link, "SELECT * FROM planteles");
        while ($planteles  = mysqli_fetch_row($v)) {
        ?>
          <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>
         <?php } ?>
         </select>

         <div id="id_UnicoPro" name="id_UnicoPro"></div>


  <input type="submit" value="Registrar" name="registraAlumno">

  </form>


  </div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#clavePlantel').val(1);
		recargarLista();

		$('#clavePlantel').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"id=" + $('#clavePlantel').val(),
			success:function(r){
				$('#id_UnicoPro').html(r);
			}
		});
	}
</script>


<?php
include("registroAlumnoDatos.php");
?>