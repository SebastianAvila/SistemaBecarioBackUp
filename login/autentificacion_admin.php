<?php
    // Credentials
    $hostname= "localhost";
    $username= "root";
    $password= "";
    $database= "sistemabecario";


    // UserInput Test
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
    } 

    if(empty($_POST['ad_usuario']) || empty($_POST['ad_contra']))
    {

        header("location: errorCamposVadmin.html");
    
    }
    else
    {
    $admin_username= test_input($_POST['ad_usuario']);
    $admin_password= test_input($_POST['ad_contra']);


    //Establish Connection
    $conn= mysqli_connect($hostname, $username, $password, $database);

    //Check
    if(!$conn)
    {
        die("Connection Failed : ".mysqli_connect_error());
    }

    $sql= "SELECT * FROM sistemabecario.admin WHERE user='".$admin_username."' AND pass='".$admin_password."'";
    $query= mysqli_query($conn, $sql);



    if(mysqli_num_rows($query)==1)
    {
        header("location:../seleccionAdmin.html");
        
    }
    else
    {
        header("location:errorContraAdmin.html");
    }

    mysqli_close($conn);

    }
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>