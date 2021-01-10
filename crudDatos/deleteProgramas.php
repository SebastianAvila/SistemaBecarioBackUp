<?php 

include("../coneccionBaseDatos/coneccionEnvio.php");

if(isset($_GET['id_UnicoPro'])){

    $id_UnicoPro = $_GET['id_UnicoPro'];
$queryDelete="DELETE FROM programas WHERE id_UnicoPro='$id_UnicoPro'";
$resultado =mysqli_query ($coneccion, $queryDelete);

 if($resultado){
 header("Location:../crudDatos/crudProgramas.php");
 }else{
     echo "mamon";
 }
}
?>