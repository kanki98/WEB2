<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik - Popis oglasa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="js.js"></script>
    
    <style>    
        .divTablica {
            background-color: rgba(197, 194, 194, 0.667);
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 3px solid black;
            margin-left: 5rem;
            margin-right: 5rem;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            max-width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            font-size: 2vw;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body class="bodyKr">
    <section class="sectionMain" class="sectionKr">
        <img class="bgMain" src="./krajolici/zagorje1.webp">
        <br>
        <ul>
        <?php 
             include "spoj.php";
            if ($_SESSION['uloga'] === 'admin'){
                echo"<li><a  href='admin_index.php'>Home</a></li>";
            }
            else
            {
                echo "<li><a href='user_index.php'>Home</a></li>";
            }
            ?>
            <li><a href="odjava.php">Odjava</a></li>
            <li><a href="upis_oglasa.php">Upis Oglasa</a></li>
        </ul>
        <div class="divTablica">
            <?php 
                include "spoj.php";

                $sql = 'SELECT * FROM oglasi';

                $result = $conn->query($sql);
                echo "<h2>Svi oglasi</h2>";
                echo "<table><tr><th>Korisničko ime</th><th>Ime oglasa</th><th>Proizvodi</th><th>ID oglasa</th><th>Action</th></tr>";

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["k_ime"] . "</td>";
                        echo "<td>" . $row["ime_oglasa"] . "</td>";
                        echo "<td>" . $row["proizvodi"] . "</td>";
                        echo "<td>" . $row["id_oglasa"] . "</td>";
                        echo "<td>";
                        if ($_SESSION['uloga'] === 'admin'  || $_SESSION['username'] === $row['k_ime']) {
                        echo "<a href='delete.php?delete_id=" . $row["id_oglasa"] . "'>Delete</a>";
                        }
                    
                        if ($_SESSION['uloga'] !== 'admin' && $_SESSION['username'] === $row['k_ime']) {
                            echo "\n<a href='uređivanje_oglasa.php?update_id=" . $row["id_oglasa"] . "'>Edit</a></td></tr>";
                        }
                    } 
                } 
                echo "</table>";
            ?>
        </div>
    </section>
</html>
