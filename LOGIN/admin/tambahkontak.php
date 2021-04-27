<?php
include 'koneksi.php';
//menyimpan data kedalam variable
$nama           = $_POST['nama'];
$jkel           = $_POST['jkel'];
$email          = $_POST['email'];
$alamat         = $_POST['alamat'];
$kota           = $_POST['kota'];
$pesan          = $_POST['pesan'];

//query sql untuk inser data
$query = "INSERT INTO kontak SET nama ='$nama', jkel ='$jkel', email ='$email', 
alamat ='$alamat', kota ='$kota', pesan ='$pesan' ";
mysqli_query($con, $query);
//memgalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");
?>