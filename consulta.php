<?php

include("coneccionBaseDatos/coneccionEnvio.php");

$clavePlantel ="eewas34";
$consulta= "SELECT nombrePlantel FROM planteles WHERE clavePlantel='$clavePlantel'";

$resu = mysqli_query($coneccion,$consulta);

while($row = mysqli_fetch_array($resu)){
    ?> <p> Plantel Elejido Anteriormente  : <?php echo $row['nombrePlantel'] ?></p> <?php 

}

?>