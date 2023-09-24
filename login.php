<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>WEB Oglasnik - Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="otherpages.css" type="text/css">
        <link rel="stylesheet" href="linkovi.css">
        <link rel="stylesheet" href="navbar.css">
    
    </head>
    <body style="background-image:url('krajolici/login.webp');" class="loginBody" class="bodyKr">
    <br>
            <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="login.php">Login</a></li>
                <li><a  href="register.php">Register</a></li>
                <li><a  href="izborproizvoda.php" >Proizvodi</a></li>
            </ul>
          <br>

          <div>
            <?php 
            include "spoj.php";
            
            $msg='';
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
                $sql="SELECT * FROM korisnici";
                $q=mysqli_query($conn,$sql);
            

                while ($redak = mysqli_fetch_array($q,MYSQLI_ASSOC)){
                    if(($_POST)['username'] == $redak["k_ime"] && $_POST['password'] == $redak['lozinka']){
                        $_SESSION['prijavljen'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['ime'] = $redak['ime'];
                        $_SESSION['prezime'] = $redak['prezime'];
                        $_SESSION['uloga'] =$redak['uloga'];
                        if($redak['uloga'] == "admin")
                            header("Location: admin_index.php");
                        else if($redak['uloga'] == "korisnik"){
                            header("Location: user_index.php");
                        }
                    }else {
                        $msg = 'Krivo korisničko ime ili lozinka!';
                    }
                }
            }
            ?>
        </div>
        <div class="divLogin">    
        <form action="" method="post" class="loginForm">

            <p><strong>Ako niste registrirani molimo Vas da se <a id="registerLink"href="register.php" >registrirate</a></strong></p>
            <hr>

            <h2>Login</h2>
            <p><strong>Ako ste registrirani molimo Vas ulogirajte se</strong></p>
            
            <hr>
            
            <label for="username">Korisničko ime:</label><br>
            <input type="text" label="username" placeholder="Vaše korisničko ime" name="username"required><br>

            <label for="password">Lozinka:</label><br>
            <input type="password" name="password" placeholder="Vaša lozinka"required><br>
            
            <hr>

            <button id="loginButton" name="login" type="submit">Ulogiraj me</button><br><br>
            <h4><?php echo $msg; ?></h4>
        </form>
        </div>
    </body>
</html>