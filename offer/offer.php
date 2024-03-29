<?php
    session_start();
?>
<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Mohawk - offer</title>
  <meta name="description" content="Oferta">
  <meta name="author" content="Bob and Parker">
  <link rel = "stylesheet" type = "text/css" href="../css/style.css"/>
  <link rel = "stylesheet" type = "text/css" href="offer.css"/>
  <link rel = "Stylesheet" type = "text/css" href="../team/reservation.css"/>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
  <link href="../css/fontello.css" rel="stylesheet" type="text/css" />
</head>

<body onload="getOffer()">

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
    <div id = "wrapper">
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
                    <li> <a href="../index.php">O nas</a></li>
                    <li><a href="../team/team.php">Zespół</a></li>
                </ol>
            </nav>
        </div>
              
                <div id = "content">
                    <table id="offer">
                        <tr>
                            <th>Oferowana usługa</th>
                            <th>Cena</th>
                            <th></th>
                        </tr>
                        
                    </table>
               

                <div id="reservation" style="display:none">
                    <div>
                        <form id = "reservationform" action="reserve.php">
                            <h2>REZERWACJA</h2>
                            <h5 id="selectedOffer"></h5>
                            <h5 id="price"></h5>
                            <select>
                                <option value="JURAND ZE SPYCHOWA">JURAND ZE SPYCHOWA</option>
                                <option value="ZBYSZKO Z BOGDANCA">ZBYSZKO Z BOGDANCA</option>
                                <option value="JAGIENKA">JAGIENKA</option>  
                                <option value="MAĆKO Z BOGDAŃCA">MAĆKO Z BOGDAŃCA</option>
                                <option value="PAN WOŁODYJOWSKI">PAN WOŁODYJOWSKI</option>
                                <option value="DANKA">DANKA</option>                
                            </select>
                            <table>
                                <tr>
                                    <td>
                                        <p>Imię</p>
                                    </td>
                                    <td>
                                        <input type="text" autocomplete="name" required autofocus/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nazwisko</p>
                                    </td>
                                    <td>
                                        <input type="text" autocomplete="family-name" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nr. telefonu</p>
                                    </td>
                                    <td>
                                        <input type="tel" autocomplete="tel"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>E-mail</p>
                                    </td>
                                    <td>
                                        <input type="email" autocomplete="email"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Data</p>
                                    </td>
                                    <td>
                                        <input type="date" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Godzina</p>
                                    </td>
                                    <td>
                                        <input type="time" required/>
                                    </td>
                                </tr>
                            </table>
                            <input type="submit" value="REZERWUJ">
                        </form>
                    </div>
                    <button onclick="goBack()">POWRÓT</button>
                 </div>
                </div>


                <div id="socials">
                        <div id="socialdivs">
                            <div id="fb">
                                <i class="icon-facebook-official"></i>
                            </div>
                            <div id="yt">
                                <i class="icon-youtube"></i>
                            </div>
                            <div id="tw">
                                <i class="icon-twitter"></i>
                            </div>
                            <div id="gplus">
                                <i class="icon-gplus"></i>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>

            <footer>
                <p>Mohawk Barbershop ul. Juranda 13</p>
            </footer>
        </div>
        </body>
        <script src="offer.js"></script>
</html>