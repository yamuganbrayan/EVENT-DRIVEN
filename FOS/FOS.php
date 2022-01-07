<?php
    $con = mysqli_connect("localhost", "root", "", "food-ordering");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $orders = $_POST['orders'];
        $selected = implode(", ", $orders);

        $query = "INSERT INTO customer(name, address, orders) VALUES('$name', '$address', '$selected')";
        $query_run = mysqli_query($con, $query);
        if($query_run){
             echo "Ordered Successfuly!\n";
             echo "Pls prepare exact amount of Cash on delivery Thank You!";
        }
        else{
            die(mysqli_connect_error());
        }
    }


?>