<!DOCTYPE html>
<html>
<head>
	<title>Web Dwi Natasya</title>
    <!--memanggi file css-->
    <link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>
<!-- membuat Header-->
	<header>
          <div class="container"> 
            <h1><a href="index.php">DWI NATASYA</a></h1>
                <ul>
					<li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="index.php">HOME</a></li>
					<li><a href="kontak.php">TAMBAH KONTAK</a></li>
					<li class="active"><a href="tampilkontak.php">TAMPIL KONTAK</a></li>
                </ul>
          </div>
      </header>
	<section  class="banner" align=center> <!-- didefinisikan sebagai kelas banner-->
        <center>
        <h2>LIST KONTAK<h2> <!-- membuat Header text-->
        <br>
        <br>
        <table border="1">
            <tr> <!-- membuat tabel-->
                <th>NO</th>
                <th>NAMA</th>
                <th>JKEL</th>
                <th>EMAIL</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>PESAN</th>
            </tr>
            <?php
            include 'koneksi.php'; //memangil file lain
            //membuat perintah select ke tabel kontak
            $kontak =mysqli_query($con, "SELECT * FROM kontak");
            $no =1;
            foreach ($kontak as $row){ //menmpilkan data pada setiap baris data kontak
                echo"
                <tr>
                <td>$no</td>
                <td>".$row['nama']."</td>
                <td>".$row['jkel']."</td>
                <td>".$row['email']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['kota']."</td>
                <td>".$row['pesan']."</td>
                </tr>";
                $no++;// setiap loop no di tambah 1
            }
            ?>
        </table>
        </center>
    </section>
	<footer><!-- membuat footer-->
          <div class="container" align="center">
              @Dwi Natasya- 19082010117- Sistem Informasi
          </div>
      </footer>
</body>
</html>