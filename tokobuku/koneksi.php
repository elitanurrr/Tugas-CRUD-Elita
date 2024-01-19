<?php
$host = "localhost:3307"; 
$user = "root";      
$pass = "";          
$db   = "db_toko_ellie";  


$koneksi = mysqli_connect($host, $user, $pass, $db);


if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
