<?php

include("coneccionBaseDatos/coneccionEnvio.php");


$clavePlantel = "eewas34"; 

$consultaPlantel= "SELECT nombrePlantel FROM planteles WHERE clavePlantel='$clavePlantel'";
$consultaPlantelQuery = mysqli_query($coneccion,$consultaPlantel);
if (mysqli_num_rows($consultaPlantelQuery) == 1) {
    $rowe = mysqli_fetch_array($consultaPlantelQuery);
    $nombrePlantel = $rowe['nombrePlantel'];
}

echo $nombrePlantel;
?>