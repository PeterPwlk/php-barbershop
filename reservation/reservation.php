<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Mohawk Barbershop</title>
  <meta name="description" content="Barbershop">
  <meta name="autdor" content="BiP">
  <link rel = "Stylesheet" type = "text/css" href="../css/style.css"/>
  <link rel = "Stylesheet" type = "text/css" href="reservation.css"/>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
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
                    <li><a href="../about/about.html">O nas</a></li>
                    <li><a href="../team/team.php">Zespół</a></li>
                </ol>
            </nav>
        </div>
    <div id="content">
        <form>
            <h2>REZERWACJA</h2>
            <select>
            <optgroup label="Golenie">
                <option value="Królewskie Golenie">Królewskie Golenie</option>
                <option value="Golenie">Golenie</option>
            </optgroup>
            <optgroup label="Strzyżenie">
                <option value="Królewskie Strzyżenie">Królewskie Strzyżenie</option>
                <option value="Strzyżenie boków">Strzyżenie boków</option>
            </optgroup>
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
    <footer>
        <p>Mohawk Barbershop ul. Juranda 13</p>
    </footer>
</body>
</html>