<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>WEB Oglasnik - Registracija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="otherpages.css">
        <link rel="stylesheet" href="navbar.css">
        
        
    </head>
    <body class="registerBody">
        <br>
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a  href="login.php">Login</a></li>
                    <li><a class="active" href="register.php">Register</a></li>
                    <li><a href="izborproizvoda.php" >Proizvodi</a></li>
               </ul>
          <br>

        <div class="divRegister">
            <form  method="post" class="registerForm" id="registerForm">
                <h2>Register</h2>
                <label for="ime">Ime:</label>
                <input id="ime" type="text" name="ime" label="ime" size="40" placeholder="Vaše ime">

                <label for="lname">Prezime:</label>
                <input id="prezime" name="prezime" type="text" label="prezime" size="40" placeholder="Vaše prezime">
  
                <label for="username">Korisničko ime:</label>
                <input id="username" name="username" type="text" label="username" size="40"  placeholder="Vaše korisničko ime">

                <label for="email">E-mail:</label>
                <input id="email"type="email" name="email" label="email" size="40"placeholder="Vaša e-mail adresa">

                <label for="password">Lozinka:</label>
                <input id="password"type="password" name="password" size="40"  placeholder="Vaša lozinka">
                
                <label for="mob">Mobitel:</label>
                <input id="mob" type="text" name="mob" size="10" placeholder="Vaš broj mobitela">

                <label for="product">Proizvodi:</label>
                <input id="proizvod" type="text" name="product" size="40"placeholder="Vaši proizvodi" >
                <button id="registerButton" type="submit"  >Registriraj me</button>
                <br>
                <p style="color: purple;"id="errorMessage"></p>
                <p>Već ste registrirani? Kliknite <a href="login.php" >ovdje</a></p>

            </form>
        </div>
        <script src="register.js"></script>
    </body>
</html>