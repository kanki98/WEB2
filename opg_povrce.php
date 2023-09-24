
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Web OPG Oglasnik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="linkovi.css">
    <link rel="stylesheet" href="navbar.css">
    
    <style>    
            .divTablica {
                background-color:rgba(197, 194, 194, 0.667);
                padding-left: 20px;
                padding-right:20px;
                padding-top: 20px;
                padding-bottom:10px;
                border: 3px solid black;
                margin-left:5rem;
                margin-right:5rem;
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
                font-size:2vw;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
        }
    </style>
</head>
<body class="bodyKr">
    <section class="sectionMain" class="sectionKr">
    <img class="bgMain" src="./krajolici/zagorje2.webp">
        <br>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a  href="login.php">Login</a></li>
            <li><a  href="register.php">Register</a></li>
            <li><a  href="izborproizvoda.php" >Proizvodi</a></li>
        </ul>
        <div class="divTablica">

        <?php 
                include "spoj.php";

                $sql = "SELECT ime, prezime, mob, vrsta_proizvoda 
                FROM korisnici 
                WHERE vrsta_proizvoda 
                LIKE '%povrce%' OR vrsta_proizvoda LIKE '%povr%' ";

                $result = $conn->query($sql);
                    echo"<table><tr><th>Vrsta proizvoda</th><th>Ime</th><th>Prezime</th><th>Mobitel</th></tr>";


                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo 
                        "<tr><td> ". $row["vrsta_proizvoda"].
                        "</td>".
                        "<td> " .$row["ime"].
                        "</td>".
                        "<td>  ".$row["prezime"].
                        "</td>".
                        "<td>  ".$row["mob"].
                        "</td></tr>" ;
                    } 
                } echo "</table>";
        ?>
        </div>
    </section>
</html>