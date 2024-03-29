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
  <link rel = "Stylesheet" type = "text/css" href="css/style.css"/>
  <link rel = "Stylesheet" type = "text/css" href="about/about.css"/>
  <script src="about/about.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body onload = "nextslide()">

    <div id = "user_info">
        <?php  
        if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin']==true))
        {
            print "<p>".$_SESSION['imie']." ".$_SESSION['nazwisko']."</p>"."<p><a href = 'user_panel/logout.php'>Wyloguj się</a></p>";
            print "<p><a href = 'user_panel/userpanel.php'>Rezerwacje</a></p>";
        }
        else 
        {
            print "<p><a href = 'user_panel/loginscreen.php'>Zaloguj się</a></p>";
            print "<p><a href = 'user_panel/signup.php'>Załóż konto</a></p>";
        }

        ?>

    </div>
    <div id = "header">
        <div id = "logo_wrapper">
            <img src="logo2.png" alt="logo salonu" id="logo"/>
            <h1> <span style="color: #efb943">Mohawk</span> Barbershop</h1>
        </div>
    </div>
    <div>
        <nav>
            <ol>
                <li><a href="offer/offer.php">Oferta</a></li>
                <li><a href="products/products.php">Produkty</a>
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
                <li><a href="index.php">O nas</a></li>
                <li><a href="team/team.php">Zespół</a></li>
            </ol>
        </nav>
    </div>
    <div id="content">
        <div id = "slider">
            <div id = "saloon"></div>
            <a class="prev" onclick="previousslide()">&#10094;</a>
            <a class="next" onclick="nextslide()">&#10095;</a>
            <div class = "dots">
                    <span class="dot" onclick="setslide(1)"></span> 
                    <span class="dot" onclick="setslide(2)"></span> 
                    <span class="dot" onclick="setslide(3)"></span> 
                    <span class="dot" onclick="setslide(4)"></span> 
                    
            </div>
        </div>
        


        <div id="info">
                <h4>DANE KONTAKTOWE</h4>
                <p>Mohawk Barbershop</p>
                <p>Juranda 13</p>
                <p>44-100 Wrocław</p>
                <p>mohawkBarbershop.pl</p>
                <p>mohawkbarbershop@gmail.com</p>
                <p>+48 123 456 789</p>
                <p>+48 987 654 312</p>
                <h4>GODZINY OTWARCIA</h4>
                <table>
                    <tr>
                        <td>PN</td>
                        <td>08:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>WT</td>
                        <td>08:00 - 20:00</td>
                    </tr>
                    <tr>
                        <td>ŚR</td>
                        <td>08:00 - 20:00</td>
                    </tr>
                    <tr>
                        <td>CZW</td>
                        <td>08:00 - 21:00</td>
                    </tr>
                    <tr>
                        <td>PT</td>
                        <td>08:00 - 21:00</td>
                    </tr>
                    <tr>
                        <td>SB</td>
                        <td>08:00 - 16:00</td>
                    </tr>
                    <tr>
                        <td>ND</td>
                        <td>ZAMKNIĘTE</td>
                    </tr>
                </table>
            </div>
            <article id="description">
                    <h2>O salonie</h2>
                    <p>
                        Z pasji do fryzjerstwa powstał Mohawk`s Barbershop, nabardziej męski salon w mieście. Pracuję na najlepszych na rynku kosmetykach przeznaczonych właśnie dla mężczyzn. Wyróżnia mnie pro aktywne nastawienie do klienta oraz nowatorskie podejście do sztuki jaką jest fryzjerstwo. Zamiłowanie do zawodu i chęć doskonalenia swoich umiejętności pozwoliły na stworzenie szerokiej gamy usług przeznaczonych dla najbardziej wymagających mężczyzn, począwszy od strzyżenia przez koloryzację, a skończywszy na kompletnej pielęgnacji włosów. Świadczę usługi na najwyższym poziomie… na takim , na jakim sam chciałbym być obsługiwany.
                    </p>
                </article>
    </div>
    <footer>
        <p>Mohawk Barbershop ul. Juranda 13</p>
    </footer>
</body>
</html>