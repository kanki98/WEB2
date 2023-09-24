<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik - Proizvodi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="slideshow.css">
    <script src="js.js"></script>
</head>
<body>
    <section class="sectionIzbor">
        <br>
        <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a  href="login.php">Login</a></li>
                <li><a  href="register.php">Register</a></li>
                <li><a  href="izborproizvoda.php" >Proizvodi</a></li>
                <li><a  href="meso.php">Meso</a></li>
                <li><a href="voce.php">Voće</a></li>
                <li><a class="active" href="povrce.php">Povrće</a></li>
          </ul>
          <br>
        <div class="divIzbor">
            <h1 style="font-size:xx-large">Ovdje klikom možete odabrati između različitog povrća:</h1>
                <hr>
                <div class="slideshow-container">

                    <div class="mySlides fade" style="display: block;">
                        <div class="numbertext">1 / 3</div>
                        <a href="opg_povrce.php">
                                <img src="povrce/krastavci.webp" style="width:100%">
                        </a>
                        <div class="text">Krastavci za zimnicu ili svježu salatu!</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <a href="opg_povrce.php">
                                <img src="povrce/krumpir.webp" style="width:100%">
                        </a>
                        <div class="text">Mladi krumpir za pomfrit</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <a href="opg_povrce.php">
                                <img src="povrce/cikla.webp" style="width:100%">
                        </a>
                    <div class="text">Cikla za kuhanje ili salatu!</div>

                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
         </div>
         <br>
     </section>
</body>
</html>


