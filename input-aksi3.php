
<?php
    include 'koneksi_klinik.php'; 

    
    $id = $_POST['id'];
    $nama_pasien = $_POST['nama_pasien']; 
    $jenis_penyakit = $_POST['jenis_penyakit'];
    $tanggal_rujukan = $_POST['tanggal_rujukan'];

    
    $query_sql = "INSERT INTO data_pasien VALUES('$id', '$nama_pasien', '$jenis_penyakit', '$tanggal_rujukan')";
    
    
    $eksekusi = mysqli_query($koneksi_sehat, $query_sql);
    
    
    if ($eksekusi) {
        header("location:formulir_kliniksehat.php?pesan=input");
    } else {
        
        die("Gagal menjalankan query: " . mysqli_error($koneksi_sehat)); 
    }
?>