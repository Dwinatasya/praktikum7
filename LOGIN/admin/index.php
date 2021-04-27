<html>
<head>
	<title>Web Dwi Natasya</title>
	<!-- memanggil file css-->
    <link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>
	<!-- cek apakah sudah login -->
	<?php 
		session_start();
		if($_SESSION['status']!="login"){
			header("location:../index.php?pesan=belum_login");
		}
		?>
	<!-- membuat Header-->
	<header>
          <div class="container"> 
            <h1><a href="index.php">DWI NATASYA</a></h1>
                <ul>
					<li><a href="logout.php">LOGOUT</a></li>
                    <li class="active"><a href="index.php">HOME</a></li>
					<li><a href="kontak.php">TAMBAH KONTAK</a></li>
					<li><a href="tampilkontak.php">TAMPIL KONTAK</a></li>
                </ul>
          </div>
      </header>
	<section  class="banner" align=center>
	<!-- bila sudah login akan menampilkan di bawah ini-->
		<center><h1>WELCOME, <?php echo $_SESSION['username']; ?>!</h1>
		<br/>
		<br/>
		<h2>Data Admin<h2>
		<br>
			<table border="1" >
				<tr> <!-- membuat tabel-->
					<th>NO</th>
					<th>NAMA</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
				</tr>
				<?php
				include 'koneksi.php'; //memangil file lain
				//membuat perintah select ke tabel login
				$login =mysqli_query($con, "SELECT * FROM login");
				$no =1;
				foreach ($login as $row){ //menmpilkan data pada setiap baris data login
					echo"
					<tr>
					<td>$no</td>
					<td>".$row['nama']."</td>
					<td>".$row['username']."</td>
					<td>".$row['password']."</td>
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