<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    require_once "spoj.php";

    $myarray = array();
    $ime = mysqli_real_escape_string($conn,$_POST['ime']);
    $prezime = mysqli_real_escape_string($conn,$_POST['prezime']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $mob = mysqli_real_escape_string($conn,$_POST['mob']);
    $proizvodi = mysqli_real_escape_string($conn,$_POST['product']);

    $sql = "SELECT * FROM korisnici WHERE k_ime = '$username'";

    $korisnikPostoji = false;
    $korisnikDodan = false;
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        $korisnikPostoji = true;
    }

    if(!$korisnikPostoji)  {
        $sql = "INSERT INTO korisnici (ime,prezime,k_ime,email,lozinka,uloga,mob,vrsta_proizvoda) 
        VALUES('$ime','$prezime','$username','$email','$password','korisnik', '$mob', '$proizvodi')"; 
        if (mysqli_query($conn, $sql)){
            $korisnikDodan = true;
        }
        
    }
    
    $myarray[]=array('korisnikDodan'=>$korisnikDodan, 'korisnikPostoji'=>$korisnikPostoji);
    echo json_encode($myarray);
    mysqli_close($conn);
    
}
?>