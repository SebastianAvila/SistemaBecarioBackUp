<?php
include("../coneccionBaseDatos/coneccionEnvio.php");
if(isset($_POST['registraAlumno'])){

    if(strlen($_POST['primerNomBeca']) >= 1 and strlen($_POST['segundoNomBeca']) >= 1 and strlen($_POST['apellidoPaterBeca']) >= 1 
    and strlen($_POST['apellidoMaterBeca']) >= 1 and strlen($_POST['celular']) >= 1 and strlen($_POST['correoElec']) >= 1){

            $primerNomBeca = $_POST['primerNomBeca'];
            $segundoNomBeca= $_POST['segundoNomBeca'];
            $apellidoPaterBeca =$_POST['apellidoPaterBeca'];
            $apellidoMaterBeca= $_POST['apellidoMaterBeca'];
            $celular = $_POST['celular'];
            $correoElec = $_POST['correoElec'];
            date_default_timezone_set("America/Mexico_City");
            DateTimeInterface::RFC1123;
            $fechaRegistroAlumno = date(DATE_RFC1123);

            $NumAleFo = rand(9999, 99999);
            $id_UnicoAlum = "PRO";
            $id_UnicoAlum .= $NumAleFo;

            


    }


}





?>