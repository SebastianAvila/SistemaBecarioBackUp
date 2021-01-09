<?php 

include("../coneccionBaseDatos/coneccionEnvio.php");

if(isset($_GET['clavePlantel'])){

$clavePlantel = $_GET['clavePlantel'];
$queryDelete="DELETE FROM planteles WHERE clavePlantel='$clavePlantel'";
$resultado =mysqli_query ($coneccion, $queryDelete);

 if($resultado){
 header("Location:../crudDatos/crudPlanteles.php");
 }else{
     echo "mamon";
 }
}
?>