<?php
 
    session_start();
     
    if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin']==true))
    {
        header('Location: userpanel.php');
        exit();
    }
 
?>

<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Mohawk Barbershop</title>
  <meta name="description" content="Barbershop">
  <meta name="author" content="BiP">
  <link rel = "stylesheet" type = "text/css" href="../css/style.css"/>
  <link rel = "stylesheet" type = "text/css" href="../team/reservation.css"/>
  <link rel="stylesheet" type="text/css" href="../user_panel/loginscreen.css"/>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CLato:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
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
                    <li><a href="../offer/offer.html">Oferta</a></li>
                    <li><a href="../products/products.html">Produkty</a>
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
            <div id = "rejestracja">
              <form action="register.php" method="post">
              <h4>Rejestracja</h4>

              <table>
                    <tr>
                        <td>
                            <p>E-mail: </p>
                        </td>
                        <td>
                            <input type="text" name="email" required autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Hasło: </p>
                        </td>
                        <td>
                            <input type="password" name="haslo" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Imie: </p>
                        </td>
                        <td>
                            <input type="text" name="imie" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Nazwisko: </p>
                        </td>
                        <td>
                            <input type="text" name="nazwisko" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Numer telefonu: </p>
                        </td>
                        <td>
                            <input type="text" name="tel" required/>
                        </td>
                    </tr>
                    
                </table>
                   <input type="submit" value="Załóż konto" />
                </form>
                <div>
                <?php
                    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
                ?>  
                </div>
            </div>
            
        </div>
    <footer>
        <p>Mohawk Barbershop ul. Juranda 13</p>
    </footer>
</body>
</html>