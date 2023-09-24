<?php
session_start();
include "spoj.php";

$id = $_GET['delete_id'];
$sql = "DELETE from oglasi WHERE id_oglasa =$id";

if($conn->query($sql))
header("Location: user_oglasi.php");
?>
