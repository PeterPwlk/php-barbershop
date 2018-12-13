<?php
    session_start();
?>

<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Mohawk Barbershop</title>
  <meta name="description" content="Barbershop">
  <meta name="author" content="BiP">
  <link rel = "stylesheet" type = "text/css" href="../css/style.css"/>
  <link rel = "stylesheet" type = "text/css" href="userpanel.css"/>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CLato:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body onload="getReservations()">
<div id = "user_info">
        <?php  
        if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin']==true))
        {
            print "<p>".$_SESSION['imie']." ".$_SESSION['nazwisko']."</p>"."<p><a href = '../user_panel/logout.php'>Wyloguj się</a></p>";
            print "<p><a href = '../user_panel/userpanel.php'>Rezerwacje</a></p>";
        }
        else 
        {
            print "<p><a href = '../user_panel/loginscreen.php'>Zaloguj się</a></p>";
            print "<p><a href = '../user_panel/signup.php'>Załóż konto</a></p>";
        }

        ?>

    </div>

    <div>
        <div id = "header">
            <div id = "logo_wrapper">
                <img src="../logo2.png" alt="logo salonu" id="logo"/>
                <h1> <span style="color: #efb943">Mohawk</span> Barbershop</h1>
            </div>
        </div>
        <div>
            <nav>
                <ol>
                    <li><a href="../offer/offer.php">Oferta</a></li>
                    <li><a href="../products/products.php">Produkty</a>
                        <ul>
                                <li><a href="#">Włosy</a></li>
                                <li><a href="#">Broda</a></li>
                                <li><a href="#">Ciało</a></li>
                                <li><a href="#">Znane marki</a>
                                    <ul>
                                        <li><a href="#">Reuzel</a></li>
                                        <li><a href="#">Uppercut</a></li>
                                        <li><a href="#">Bluebeard's Revenge</a></li>
                                        <li><a href="#">Damn good soap</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </li>
                    <li><a href="../index.php">O nas</a></li>
                    <li><a href="../team/team.php">Zespół</a></li>
                </ol>
            </nav>
        </div>
        <div id="content">
            <div id="reservations_list">
            </div>
        </div>
    <footer>
        <p>Mohawk Barbershop ul. Juranda 13</p>
    </footer>
</body>
<script src="userpanel.js"></script>
</html>