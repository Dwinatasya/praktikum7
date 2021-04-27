<html>
<head>
	<title>Web Dwi Natasya</title>
    <!-- memanggil file css-->
    <link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>
	<!-- membuat Header-->
	<header>
          <div class="container"> 
            <h1><a href="admin/index.php">DWI NATASYA</a></h1>
                <ul>
					<li><a href="logout.php">LOGOUT</a></li>
                    <li ><a href="index.php">HOME</a></li>
					<li class="active"><a href="kontak.php">TAMBAH KONTAK</a></li>
					<li><a href="tampilkontak.php">TAMPIL KONTAK</a></li>
                </ul>
          </div>
      </header>
	<section  class="banner"> <!-- didefinisikan sebagai kelas banner-->
		<center>
		<div id="box"> <!-- didefinisikan sebagai id box-->
        <!-- membuat form dengan post kemudian aksi di lanjutkan
        ke tambahkontak.php-->
		<form method="POST" action="tambahkontak.php">
        <table> <!-- membuat tabel tambah kontak-->
        <h2>Form Tambah Kontak</h2>
		<br>
		<br>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td>:</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td>:</td>
                <td><input type="text" name="pesan"></td>
            </tr>
            <tr><!-- membuat tombol simpan-->
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
        </form>

		</div>
		</center>
    </section>
	<footer><!-- membuat footer-->
          <div class="container" align="center">
              @Dwi Natasya- 19082010117- Sistem Informasi
          </div>
      </footer>
</body>
</html>