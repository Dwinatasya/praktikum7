<?php
include '1.1koneksi.php';
//menyimpan data kedalam variable
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jurusan        = $_POST['jurusan'];
$alamat         = $_POST['alamat'];
//query sql untuk inser data
$query = "INSERT INTO mahasiswa SET nim ='$nim', nama ='$nama', 
jenis_kelamin ='$jenis_kelamin', jurusan ='$jurusan', alamat ='$alamat'";
mysqli_query($con, $query);
//memgalihkan ke halaman 1.2list.php
header("location:1.2list.php");
?>