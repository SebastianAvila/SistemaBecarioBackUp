<?php

include("../coneccionBaseDatos/coneccionEnvio.php");


$localidad ='';
$nombre='';

if(isset($_GET['clavePlantel'])){
    $clavePlantel=$_GET['clavePlantel'];
    $query = "SELECT * FROM  planteles WHERE clavePlantel='$clavePlantel'";
    $resulta = mysqli_query($coneccion,$query);
    
    if (mysqli_num_rows($resulta) ==1 ) {
        $row = mysqli_fetch_array($resulta);
        $clavePlantel =$row['clavePlantel'];
        $localidad=$row['localidad'];
        $nombre=$row['nombrePlantel'];


    }
}



if (isset($_POST['editarPlantel'])) {
        $clavePlantel=$_POST['clavePlantel'];
        $localidad=$_POST['localidad'];
        $nombre=$_POST['nombrePlantel'];

    $queryPlan = "UPDATE planteles SET localidad = '$localidad', nombrePlantel='$nombre'  WHERE clavePlantel='$clavePlantel'";

    
    $resulPlan= mysqli_query($coneccion, $queryPlan);
   
    
    if($resulPlan){
        header("Location:../crudDatos/crudPlanteles.php ");
    }else{
        echo "mamon";
    }
    
  }

?>




<form action="editPlantel.php?clavePlantel=<?php echo $_GET['clavePlantel']; ?>" method="POST">

<input type="text" name="clavePlantel" id="clavePlantel" value="<?php echo $clavePlantel ?>" style="display: none;">
<h3>Localidad</h3>
<input type="text" name="localidad" id="localidad" value="<?php echo $localidad ?>">
<h3>Nombre Plantel</h3>
<input type="text" name="nombrePlantel" id="nombrePlantel" value="<?php echo $nombre ?>">


                
                

<button class="btn-success" name="editarPlantel">
  Update
</button>
</form>

