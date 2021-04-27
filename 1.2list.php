<h2>List Mahasiswa<h2>
    <table border="1">
        <tr> <!-- membuat tabel-->
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GANDER</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
        </tr>
        <?php
        include '1.1koneksi.php'; //memangil file lain
        //membuat perintah select ke tabel mahasiswa
        $mahasiswa =mysqli_query($con, "SELECT * FROM mahasiswa");
        $no =1;
        foreach ($mahasiswa as $row){ //menmpilkan data pada setiap baris data mahasiswa
            $jenis_kelamin = $row['jenis_kelamin'] == 'P'?'Perempuan': 'Laki Laki';
            echo"
            <tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
            <td>".$row['alamat']."</td>
            </tr>";
            $no++;// setiap loop no di tambah 1
        }
        ?>
    </table>