<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik - Uređivanje oglasa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="otherpages.css">
    <script src="js.js"></script>
    
    
    <?php 
            require_once "spoj.php";

                if (!empty($_POST['products']))  {
                    unset($error);
                    $id = $_GET['update_id'];
                    $sql = 'SELECT * FROM oglasi WHERE id_oglasa = "'.$id.'"';
                    $result = mysqli_query($conn,$sql);

                    
                        $ime_oglasa = $_POST['oglas'];
                        $proizvodi = $_POST['products'];
                        
                        

                        $sql = " UPDATE oglasi 
                        SET proizvodi='$proizvodi', ime_oglasa='$ime_oglasa'
                        WHERE id_oglasa ='$id' "; 

                        if (mysqli_query($conn, $sql)){
                            echo "Record updated successfully";
                            header("location: user_oglasi.php");
                        }
                        else {
                            echo "Error: " . $sql . ": -" . mysqli_error($conn);
                        }
                        mysqli_close($conn);

                    
                }
     ?>

</head>
<body class="registerBody" class="bodyKr">
        <br>
        <ul>
            <li><a  href="user_index.php">Home</a></li>
            <li><a  href="odjava.php">Odjava</a></li>
            <li><a  href="upis_oglasa.php">Upis Oglasa</a></li>
            <li><a  href="user_oglasi.php">Popis Oglasa</a></li>

          </ul>
          
        <br>
        <div class="divRegister">
            <form action="" method="post" class="registerForm">

            <?php    
                $id = $_GET['update_id'];
                $name = $_SESSION['username'];
                $sql = 'SELECT * FROM oglasi WHERE id_oglasa = "'.$id.'"';
                $result = mysqli_query($conn,$sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        echo"<table><tr><th>Korisničko ime</th><th>Ime oglasa</th><th>Proizvodi</th><th>ID oglasa</th></tr>".
                        "<tr><td> " .$row["k_ime"].
                        "</td>".
                        "<td> ". $row["ime_oglasa"].
                        "</td>".
                        "<td> " .$row["proizvodi"].
                        "</td>".
                        "<td>  ".$row["id_oglasa"].
                        "</td></tr>" ;
                    } 
                } echo "</table>";
          ?>
                <h2>Uređivanje oglasa</h2>
                <label for="oglas">Ime oglasa:</label>
                <input id="oglas" name="oglas" type="text" label="oglas" size="40"  placeholder="Kako ćete preimenovati oglas?">
                <label for="products">Proizvodi:</label>
                <input id="proizvodi" type="text" name="products" size="40" placeholder="Proizvodi koje mislite urediti" >
                <button id="registerButton" type="submit">Uredi oglas</button>
                <br>
            </form>
        </div>
</body>
</html>