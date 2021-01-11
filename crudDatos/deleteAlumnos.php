<?php 

include("../coneccionBaseDatos/coneccionEnvio.php");

if(isset($_GET['id_UnicoAlum'])){

$id_UnicoAlum = $_GET['id_UnicoAlum'];
$queryDelete="DELETE FROM ALUMNOS WHERE id_UnicoAlum='$id_UnicoAlum'";
$resultado =mysqli_query ($coneccion, $queryDelete);

 if($resultado){
 header("Location:../crudDatos/crudAlumnos.php");
 }else{
     echo "mamon";
 }
}
?>