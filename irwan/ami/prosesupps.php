<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$tahun = $_POST['tahun'];
$pendidikan = $_POST['pendidikan'];
$penilitian =$_POST['penilitian'];
$pkm =$_POST['pkm'];
$publikasi = $_POST['publikasi'];
$inevstasi = $_POST['inevstasi'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `upps1`(kode, tahun, pendidikan, penilitian, pkm, publikasi, inevstasi) VALUES ('$kode','$tahun', '$pendidikan', '$penilitian','$pkm','$publikasi','$inevstasi')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data4.php');
} else {
  header('Location: data4.php');
}