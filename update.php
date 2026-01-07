<?php
    include 'koneksi.php'; 

    
    $id = $_POST['id'];
    $nama_peminjam = $_POST['nama_peminjam']; 
    $judul_buku = $_POST['judul_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];

    mysql_query("UPDATE peminjaman SET nama_peminjam='$nama_peminjam', judul_buku='$judul_buku', 
    tanggal_pinjam='$tanggal_pinjam', WHERE id='$id'" );

    header("location:formulir_perpuskotamadiun.php?pesan=update");
?>