<html>
<head>
    <title>Web Dwi Natasya</title>
    <!-- memanggil file css -->
    <link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>
     <!--Header-->
     <header>
          <div class="container"> 
            <h1><a href="index.php">DWI NATASYA</a></h1>
          </div>
      </header>
	<br/>
    <section  class="banner" align=center><!-- di definisikan sebagai class banner -->
    <div id="boxlogin"> <!-- di definisikan sebagai id boxlogin -->
        <h3>LOGIN</h3>
        <!-- cek pesan notifikasi -->
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
        ?>
        <br/>
        <!--membuat form login dengan method post kemudian aksi di lanjutkan
        ke cek_login.php-->
        <form  method="post" action="cek_login.php">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="LOGIN">
        </form>
    </div>
    </section>
	<footer> <!--membuat footer sebagai hiasan-->
          <div class="container" align="center">
              @Dwi Natasya- 19082010117- Sistem Informasi
          </div>
      </footer>
</body>
</html>