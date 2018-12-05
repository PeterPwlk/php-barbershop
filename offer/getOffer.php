<?php
    require_once "../connect.php";

    $connection = @new mysqli($host,$db_user,$db_password,$db_name);

    if($connection->connect_errno!=0){
        echo "Error".$connection->connect_error;
    } else{
        $sql = "SELECT * FROM uslugi";
        $offer = [];
        $result = mysqli_query($connection,$sql);
        while($row = $result->fetch_assoc()){
            array_push($offer, json_encode($row,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
        $result->free_result();
    }
    echo json_encode($offer,JSON_UNESCAPED_UNICODE);
    $connection->close();
?>