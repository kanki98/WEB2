<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik - Upis oglasa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="otherpages.css">
    <script src="js.js"></script>
    
    <?php 
            require_once "spoj.php";

                if (!empty($_POST['username']))  {
                    unset($error);

                    
                        $k_ime = $_POST['username'];
                        $ime_oglasa = $_POST['oglas'];
                        $proizvodi = $_POST['products'];
                        

                        $sql = "INSERT INTO oglasi (k_ime, ime_oglasa, proizvodi) 
                        VALUES('$k_ime','$ime_oglasa','$proizvodi')"; 
                        if (mysqli_query($conn, $sql)){
                            header("location: user_oglasi.php");
                        }
                        else {
                            echo "Error: " . $sql . ": -" . mysqli_error($conn);
                        }
                        mysqli_close($conn);

                    
                }
     ?>

</head>
<body class="sectionMain" class="bodyKr">
<img class="bgMain" src="./krajolici/zagorje2.webp">
        <br>
        <ul>
            <li><a  href="user_index.php">Home</a></li>
            <li><a  href="odjava.php">Odjava</a></li>
            <li><a  href="user_oglasi.php">Popis Oglasa</a></li>

          </ul>
        <br>
        <div class="divRegister">
            <form action="" method="post" class="registerForm">

                <h2>Upis oglasa</h2>
                <label for="username">Korisničko ime:</label>
                <input id="username" name="username" type="text" label="username" size="40"  placeholder="Vaše korisničko ime">
                <label for="oglas">Ime oglasa:</label>
                <input id="oglas" name="oglas" type="text" label="oglas" size="40"  placeholder="Kako će se Vaš oglas zvati">
                <label for="products">Proizvodi:</label>
                <input id="proizvodi" type="text" name="products" size="40" placeholder="Proizvodi koje mislite oglašavati" >
                <button id="registerButton" type="submit">Upiši oglas</button>
                <br>
            </form>
        </div>
</body>
</html>