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
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $tel = $_POST['tel'];
     
        if ($result = @$connection->query(
        "SELECT * FROM uzytkownicy WHERE email='$email'"))
        {
            $user_count = $result->num_rows;
            if($user_count>0)
            {

                
                $_SESSION['blad'] = '<span style="color:red">Podany e-mail jest powiązany z innym kontem! Zaloguj się</span>';
       
                $result->free_result();
                header('Location: loginscreen.php');
                 
            } else {

                unset($_SESSION['blad']);
                header('Location: loginscreen.php');
              if($user_data = @$connection->query(
                    "INSERT INTO uzytkownicy(email, haslo, imie, nazwisko, tel) 
                    VALUES ('$email','$haslo','$imie', '$nazwisko', '$tel' )"))
                {
                    $user_data->free_result();
                    header('Location: userpanel.php');    
                }
                
            }
             
        }
         
        $connection->close();
    }
     
?>