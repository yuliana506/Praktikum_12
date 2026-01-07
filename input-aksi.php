
<?php
    include 'koneksi.php'; 

    
    $id = $_POST['id'];
    $nama_peminjam = $_POST['nama_peminjam']; 
    $judul_buku = $_POST['judul_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];

    
    $query_sql = "INSERT INTO peminjaman VALUES('$id', '$nama_peminjam', '$judul_buku', '$tanggal_pinjam')";
    
    
    $eksekusi = mysqli_query($koneksi, $query_sql);
    
    
    if ($eksekusi) {
        header("location:formulir_perpuskotamadiun.php?pesan=input");
    } else {
        
        die("Gagal menjalankan query: " . mysqli_error($koneksi)); 
    }
?>