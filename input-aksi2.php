
<?php
    include 'koneksi_service.php'; 

    
    $id = $_POST['id'];
    $nama_pemilik = $_POST['nama_pemilik']; 
    $jenis_motor = $_POST['jenis_motor'];
    $tanggal_service = $_POST['tanggal_service'];

    
    $query_sql = "INSERT INTO data_kendaraan VALUES('$id', '$nama_pemilik', '$jenis_motor', '$tanggal_service')";
    
    
    $eksekusi = mysqli_query($koneksi_inv, $query_sql);
    
    
    if ($eksekusi) {
        header("location:formulir_servicesmotor.php?pesan=input");
    } else {
        
        die("Gagal menjalankan query: " . mysqli_error($koneksi_inv)); 
    }
?>