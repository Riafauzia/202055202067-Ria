<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($nis) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$nis','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>