<?php
    $con = mysqli_connect("localhost", "root", "", "fos");

    if(!$con){
        die("Registration Failed! : ".mysqli_connect_error());
    }
    else{
        echo "Successfuly Registered!";
    }


?>