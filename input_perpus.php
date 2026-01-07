<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Database dan menampiljabn data dari database dengan PHP</title>
    </head>
    <link rel="stylesheet" href="style/formulir1.css">
    <body>
        <div class="judul">
            <h1>Membuat Koneksi dengan PHP dan MYSQL</h1>
            <h2>Menampilkan data dari database</h2>
            <h3>Formulir Peminjaman buku</h3>
            <br/>
            <br/>
            </div>
            <br/>
            <a href="input_perpus.php">Lihat semua data</a>
            <br/>
            <h3>Input Data Baru</h3>
            <form action="input-aksi.php" method="post">
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>nama_peminjam</td>
                        <td><input type="text" name="nama_peminjam"></td>
                    </tr>
                    <tr>
                        <td>judul_buku</td>
                        <td><input type="text" name="judul_buku"></td>
                    </tr>
                    <tr>
                        <td>tanggal_pinjam</td>
                        <td><input type="date" id="start" name="tanggal_pinjam"
                            value="2025-12-14"
                            min="2025-01-01" max="2025-12-31"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="simpan"></td>
                    </tr>
                </table>
        </form>
    </body>
</html>