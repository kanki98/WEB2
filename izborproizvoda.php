<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik - Proizvodi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="slideshow.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section class="sectionMain">
        <img class="bgMain" src="./krajolici/zagorje2.webp">
        <br>
        <ul>
            <li><a  href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a  href="register.php">Register</a></li>
            <li><a href="meso.php">Meso</a></li>
            <li><a  href="voce.php">Voće</a></li>
            <li><a  href="povrce.php">Povrće</a></li>
          </ul>
          <br>
        <div class="divIzbor">
            <h1 style="font-size:xx-large">Ovdje klikom možete odabrati između različitih skupina naših proizvoda : </h1>
                <hr>
                <div class="slideshow-container">

                    <div class="mySlides fade" >
                        <div class="numbertext">1 / 3</div>
                        <a href="meso.php">
                                <img src="meso/meso.webp" style="width:100%">
                        </a>
                        <div class="text">Svježe meso</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <a href="voce.php">
                                <img src="voce/voce.webp" style="width:100%">
                        </a>
                        <div class="text">Svježe voće</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <a href="povrce.php">
                                <img src="povrce/povrce.webp" style="width:100%">
                        </a>
                    <div class="text">Svježe povrće</div>

                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <br>

                <div style="text-align:center">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
         </div>
         <br>
     </section>
     <script src="./slideshow.js"></script>
</body>
</html>


