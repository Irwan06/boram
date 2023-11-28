<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$pkm = $_POST['pkm'];
$kuliah  = $_POST['kuliah'];
$integrasi = $_POST['integrasi'];
$kode = $_POST['kode'];


 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pkm`(dosen, pkm, kuliah, integrasi, kode) VALUES ('$dosen', '$pkm', '$kuliah', '$integrasi',  '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}