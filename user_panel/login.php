<?php
 
    session_start();

    require_once "../connect.php";
 
    $connection = @new mysqli($host, $db_user, $db_password, $db_name);
     
    if ($connection->connect_errno!=0)
    {
        echo "Error: ".$connection->connect_errno;
    }
    else
    {
        $email = $_POST['email'];
        $haslo = $_POST['haslo'];
     
        if ($result = @$connection->query(
        "SELECT * FROM uzytkownicy WHERE email='$email' AND haslo='$haslo'"))
        {
            $user_count = $result->num_rows;
            if($user_count>0)
            {
                $_SESSION['loggedin'] = true;
                 
                $row = $result->fetch_assoc();
                $_SESSION['email'] = $row['email'];
                $_SESSION['imie'] = $row['imie'];
                $_SESSION['nazwisko'] = $row['nazwisko'];
                
                                 
                unset($_SESSION['blad']);
                $result->free_result();
                header('Location: ../index.php');
                 
            } else {
                 
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy e-mail lub hasło!</span>';
                header('Location: loginscreen.php');
                 
            }
             
        }
         
        $connection->close();
    }
     
?>