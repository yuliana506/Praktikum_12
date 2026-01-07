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
            <h3>Formulir Service Motor</h3>
            <br/>
            <br/>
            </div>
            <br/>
            <a href="input_service.php">Lihat semua data</a>
            <br/>
            <h3>Input Data Baru</h3>
            <form action="input-aksi2.php" method="post">
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>nama_pemilik</td>
                        <td><input type="text" name="nama_pemilik"></td>
                    </tr>
                    <tr>
                        <td>jenis_motor</td>
                        <td><input type="text" name="jenis_motor"></td>
                    </tr>
                    <tr>
                        <td>tanggal_service</td>
                        <td><input type="date" id="start" name="tanggal_service"
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