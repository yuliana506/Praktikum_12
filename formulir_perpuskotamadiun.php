<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan menampiljabn data dari database dengan PHP</title>
                <link rel="stylesheet" href="style/formulir1.css">
    </head>
    <body>
        <div class="judul">
            <h1>Membuat Koneksi dengan PHP dan MYSQL</h1>
            <h2>Menampilkan data dari database</h2>
            <h3>Formulir Peminjaman buku</h3>
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
            <a href="input_perpus.php">Lihat semua data</a>
            <h3>Data Peminjam</h3>
            <table border="1" class="table">
                <tr>
                    <th>id</th>
                    <th>nama_peminjam</th>
                    <th>judul_buku</th>
                    <th>tanggal_pinjam</th>
                </tr>
                <?php
   
                include "koneksi.php"; 
                
                // Query untuk mengambil data
                $sql = "SELECT * FROM peminjaman ORDER BY id DESC"; // Tampilkan data terbaru di atas
                $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                
                // Ambil dan tampilkan data
                while($data = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['nama_peminjam'];?></td>
                    <td><?php echo $data['judul_buku'];?></td>
                    <td><?php echo $data['tanggal_pinjam'];?></td>
                    <td><a class="edit" href="edit.php?id=<?php echo$data['id'];?>">Edit</a>
                    <td><a class="hapus" href="hapus.php?id=<?php echo$data['id'];?>">Hapus</a>
                </td>
                </tr>
                <?php }
                // // Tutup koneksi
                // mysqli_close($koneksi);
                ?>
            </table>
        
    </body>
</html>