<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan menampilkan data dari database dengan PHP</title>
    </head>
    <link rel="stylesheet" href="style/formulir1.css">
    <body>
        <div class="judul">
            <h1>Membuat Koneksi dengan PHP dan MYSQL</h1>
            <h2>Menampilkan data dari database</h2>
            <h3>Formulir Klinik sehat</h3>
            <br/>
            <br/>
            </div>
             <br/>
            <!-- tambahan -->
            <?php
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input") {
                    echo "Data Berhasil di input";
                }else if($pesan == "update"){
                    echo "Data berhasil di update";
                }else if($pesan == "hapus"){
                    echo "Data berhasil di hapus";
                }
            }
            ?>
            <br/>
            <a href="input_klinik.php">Lihat semua data</a>
            <h3>Data Pasien</h3>
            <table border="1" class="table">
                <tr>
                    <th>id</th>
                    <th>nama_pasien</th>
                    <th>jenis_penyakit</th>
                    <th>tanggal_rujukan</th>
                </tr>
                <?php
   
                include "koneksi_klinik.php"; 
                
                // Query untuk mengambil data
                $sql = "SELECT * FROM data_pasien ORDER BY id DESC"; // Tampilkan data terbaru di atas
                $query = mysqli_query($koneksi_sehat, $sql) or die(mysqli_error($koneksi_sehat));
                
                // Ambil dan tampilkan data
                while($data = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['nama_pasien'];?></td>
                    <td><?php echo $data['jenis_penyakit'];?></td>
                    <td><?php echo $data['tanggal_rujukan'];?></td>
                    <td><a class="edit" href="edit.php?id=<?php echo$data['id'];?>">Edit</a>
                    <td><a class="hapus" href="hapus.php?id=<?php echo$data['id'];?>">Hapus</a>
                </td>
                </tr>
                <?php }
                // Tutup koneksi
                // mysqli_close($koneksi_sehat);
                ?>
            </table>
        
    </body>
</html>