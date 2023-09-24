<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="js.js"></script>
    
    
</head>
<body class="bodyKr">
    <section class="sectionMain" class="sectionKr">
    <img class="bgMain" src="./krajolici/zagorje2.webp">
        <br>
        <ul>
            <li><a class="active" href="user_index.php">Home</a></li>
            <li><a  href="odjava.php">Odjava</a></li>
            <?php 
             include "spoj.php";
            if ($_SESSION['uloga'] !== 'admin'){
                echo"<li><a  href='upis_oglasa.php'>Upiši oglas</a></li>";
            }
            ?>
            
            
            <li><a  href="user_oglasi.php">Popis Oglasa</a></li>
          </ul>
        <br>
       <div class="divMain">
            <h1><strong>Dobrodošli !</strong></h1>
            <br>
            <h2>Kako  biste  oglašavali  svoje  proizvode  molimo  kliknite  na  "Upiši oglas"</h2>
            <h2>u  izborniku  u  gornjem  lijevom  kutu</h2>
            <br>
            <h2>Kako biste vidjeli sve oglase molimo kliknite na "Popis Oglasa"</h2>
        </div>
    </section>
</body>
</html>