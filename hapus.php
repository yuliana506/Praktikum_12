<?php
$include 'koneksi.php';
$id =$_GET['id'];
mysql_query("DELETE FROM peminjaman WHERE id='$id'") or 
die(mysql_error());

header("location:formulir_perpuskotamadiun.php?pesan=hapus");
?>