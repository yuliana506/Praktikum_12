<?php
$host = "localhost"; 
$user = "root";    
$pass = "";        
$db_inv = "service_motor";

$koneksi_inv = mysqli_connect($host, $user, $pass, $db_inv);

// Cek koneksi
if (!$koneksi_inv) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
