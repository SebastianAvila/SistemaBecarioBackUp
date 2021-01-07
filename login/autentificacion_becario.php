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

    if(empty($_POST['be_usuario']) || empty($_POST['be_contra']))
    {
        header("location:errorCamposVbecario.html");
    }
    else
    {
    $becario_username= test_input($_POST['be_usuario']);
    $becario_password= test_input($_POST['be_contra']);


    //Establish Connection
    $conn= mysqli_connect($hostname, $username, $password, $database);

    //Check
    if(!$conn)
    {
        die("Connection Failed : ".mysqli_connect_error());
    }

    $sql= "SELECT * FROM sistemabecario.becariocuenta WHERE user_becario='".$becario_username."' AND pass_becario='".$becario_password."'";
    $query= mysqli_query($conn, $sql);



    if(mysqli_num_rows($query)==1)
    {
        header("location:sebasteamtroXD.html");
        
    }
    else
    {
         header("location:errorContraBecario.html");
    }

    mysqli_close($conn);

    }
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>