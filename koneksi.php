<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "galery-foto"; 


$koneksi = new mysqli($servername, $username, $password, $dbname);


if(!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

