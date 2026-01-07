<!DOCTYPE html>
<html>
    <head>
        <title>Update Data di database dengan PHP</title>
        <link rel="stylesheet" href="style/formulir1.css">
    </head>
    <body>
        <div class="judul">
            <h1>Update Data di database dengan PHP</h1>
            <h2>Update data dari database</h2>
            <h3>Formulir Perpustakaan kota madiun</h3>
        </div>
        <br>
        <a href="formulir_perpuskotamadiun.php">Lihat Semua Data</a>
        <br>
        <h3>Edit data</h3>
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysql_query("SELECT * FROM peminjaman WHERE id='$id'") or die(mysql_error());
        while($data =mysqli_fetch_array($query_mysql)){
            ?>
        <form action="update.php" method ="post">
            <table>
                <tr>
                    <td>id</td>
                    <td><input type="text" name="id" value="<?php echo $data['id']?>"></td>
                </tr>
                <tr>
                    <td>nama_peminjam</td>
                    <td><input type="text" name="nama_peminjam" value="<?php echo $data['nama_peminjam']?>"></td>
                </tr>
                <tr>
                    <td>judul_buku</td>
                    <td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku']?>"></td>
                </tr>
                <tr>
                    <td>tanggal_pinjam</td>
                    <td><input type="text" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
           </form>
       <?php } ?>
    </body>
</html>