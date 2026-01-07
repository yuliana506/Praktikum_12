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
            <h3>Formulir Klinik Sehat</h3>
            <br/>
            <br/>
            </div>
            <br/>
            <a href="input_klinik.php">Lihat semua data</a>
            <br/>
            <h3>Input Data Baru</h3>
            <form action="input-aksi3.php" method="post">
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>nama_pasien</td>
                        <td><input type="text" name="nama_pasien"></td>
                    </tr>
                    <tr>
                        <td>jenis_penyakit</td>
                        <td><input type="text" name="jenis_penyakit"></td>
                    </tr>
                    <tr>
                        <td>tanggal_rujukan</td>
                        <td><input type="date" id="start" name="tanggal_rujukan"
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