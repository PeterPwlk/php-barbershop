<?php
    session_start();
    require_once "../connect.php";

    $connection = @new mysqli($host,$db_user,$db_password,$db_name);

    if($connection->connect_errno!=0){
        echo "Error".$connection->connect_error;
        $connection->close();
    } else {
        $barber = $_POST["barber"];
        $customer = $_SESSION["email"];
        $service = $_POST["service"];
        $date = $_POST["date"]." ".$_POST["hour"];
        $sql = "INSERT INTO rezerwacje(barber,klient,usluga,data)
         VALUES('$barber','$customer','$service','$date')";
        if($connection->query($sql) === TRUE){
            header("Location: ../user_panel/userpanel.php",true);
            exit;
        }else{
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
        $connection->close();
    }
   
?>