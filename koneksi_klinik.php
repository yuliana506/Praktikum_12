<?php
$host = "localhost"; 
$user = "root";    
$pass = "";        
$db_sehat = "klinik_sehat";

$koneksi_sehat = mysqli_connect($host, $user, $pass, $db_sehat);

// Cek koneksi
if (!$koneksi_sehat) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
