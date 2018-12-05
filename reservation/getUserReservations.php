<?php
    require_once "../connect.php";

    $connection = @new mysqli($host,$db_user,$db_password,$db_name);

    if($connection->connect_errno!=0){
        echo "Error".$connection->connect_error;
    } else{
        //TODO change customer to session
        $customer = "test@gmail.com";
        $sql = "SELECT barber,usluga,data FROM rezerwacje WHERE klient='$customer'";
        $reservations = [];
        $result = mysqli_query($connection,$sql);
        while($row = $result->fetch_assoc()){
            array_push($reservations, json_encode($row,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
        $result->free_result();
    }
    echo json_encode($reservations,JSON_UNESCAPED_UNICODE);
    $connection->close();
?>