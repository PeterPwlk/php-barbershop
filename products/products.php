<?php
    session_start();
?>
<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>Mohawk - products</title>
  <meta name="description" content="Barbershop">
  <meta name="author" content="BiP">

  <link rel = "Stylesheet" type = "text/css" href="../css/style.css"/>
  <link rel = "stylesheet" type="text/css" href="products.css">
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
                    <li><a onclick="showProducts()">Produkty</a>
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
                    <li><a onclick="showCart()">KOSZYK</a></li>
                </ol>
            </nav>
        </div>

   
    <div id="content">
        <div id = "cart">
            <h3>Koszyk</h3>
        </div>
        <div id="products">
            <h2>Produkty</h2>
            <div>
                <fieldset>
                        <legend>Kategoria:</legend>
                
                <div>
                        <input type="radio" id="radio1"
                                name="kat" value="hair" onclick="filterProducts()"/>
                        <label for="wlosy">Włosy</label>
                    </div>
            
                    <div>
                        <input type="radio" id="radio2"
                                name="kat" value="beard"  onclick="filterProducts()"/>
                        <label for="broda">Broda</label>
                    </div>
            
                    <div>
                        <input type="radio" id="radio3"
                                name="kat" value="body"  onclick="filterProducts()"/>
                        <label for="cialo">Ciało</label>
                    </div>
    
                </fieldset>
            </div>
    
            <div>
                <div id="hair" class="kat">
                    <h3>Włosy</h3>
                    <ul>
                        
                        <li>
                                
                            <div class = "brand">
                            <h4>REUZEL</h4>
                            <a href = "https://www.reuzelpomade.com/" title = "Zobacz oficjalną strone REUZEL" target = "blank">STRONA INTERNETOWA</a>
                            </div>
    
    
                        <ul>
                            <li>
                                <div class = "product">
                                    <img src="reuzelgreen.png" width= 200 alt="reuzelgreen"/>
    
                                    <div class = "productinfo">
                                    <p class="productName">Reuzel <b>GREEN</b></p>
                                    <p>Na bazie wosku</p>
                                    <p>Medium hold, medium shine</p>
                                    <button class = "btorder" value= "Reuzel GREEN">ZAMÓW</button>
                                    </div>
    
                                </div>
                            
                            </li>
                            <li>
                                <div class = "product">
                                        <img src="reuzelgreen.png" width= 200 alt="reuzelgreen"/>
    
                                    <div class = "productinfo">
                                    <p class="productName">Reuzel <b>PINK</b></p>
                                    <p>Na bazie wosku</p>
                                    <p>High hold, high shine</p>
                                    <button class = "btorder" value= "Reuzel PINK">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                        </li>
                        <li>
                    
                        
                        <h4>UPPERCUT DELUXE</h4>
                        <ul>
                            <li>
                                <div class = "product">
                                        <img src="uppercut.png" width= 200 alt="uppercut"/>               
    
                                    <div class = "productinfo">
                                    <p class="productName">Uppercut DELUXE - <b>FEATHERWEIGHT</b></p>
                                    <p>Na bazie wody</p>
                                    <p>Easy hold, matt</p>
                                    <button class = "btorder" value= "UpperCut FEATHERWEIGHT">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                        
    
                            <li>
                                <div class = "product">
                                        <img src="uppercut.png" width= 200 alt="uppercut"/>               
    
                                    <div class = "productinfo">
                                    <p class="productName">Uppercut DELUXE - <b>MONSTERHOLD</b></p>
                                    <p>Wosk</p>
                                    <p>High hold </p>
                                    <button class = "btorder" value= "UpperCut MONSTERHOLD">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </div>
                <div id="beard" class="kat">  
                    <h3>Broda</h3>
                    <ul>
                        <li>
                        <h4>BLUEBEARD'S REVENGE</h4>
                        <ul>
                            <li>
                                <div class = "product">
                                        <img src="bluerev.png" width= 200 alt="bluerev"/>
    
                                    <div class = "productinfo">
                                    <p class="productName">Bluebeards Revenge <b>CUBAN BLEND</b></p>
                                    <p>Olejek do brody</p>
                                    <button class = "btorder" value= "Bluebeard's CUBAN BLEND">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                    
    
                            <li>
                                <div class = "product">
                                        <img src="bluerev.png" width= 200 alt="bluerev"/>
    
                                    <div class = "productinfo">
                                    <p class="productName">Bluebeards Revenge <b>CLASSIC BLEND</b></p>
                                    <p>Olejek do brody</p>
                                    <button class = "btorder" value= "Bluebeard's CLASSICBLEND">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </div>  
                <div id="body" class="kat">
                    <h3>Ciało</h3>
                    <ul>
                        <li>
                        <h4>DAMN GOOD SOAP</h4>
                        <ul>
                            <li>
                                <div class = "product">
                                        <img src="damngoodsoap.png" width= 200 alt="dgsoap"/>
    
                                    <div class = "productinfo">
                                    <p class="productName">DAMN GOOD SOAP</p>
                                    <p>Mydło do ciała</p>
                                    <button class = "btorder" value= "Damn good soap">ZAMÓW</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Mohawk Barbershop ul. Juranda 13</p>
    </footer>
</body>
<script src="products.js"></script>
</html>