<html>
    <head>
        <title>Form Input</title>
    </head>
    <body><!-- membuat form dengan method post-->
        <form method="POST" action="1.4simpan.php">
        <table> <!-- membuat tabel-->
            <tr>
                <td>NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Pertanian">Pertanian</option>
                        <option value="Rekamedis">Rekamedis</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr><!-- membuat tombol simpan-->
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
        </form>
    </body>
</html>