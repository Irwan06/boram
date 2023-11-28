<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$prestasi = $_POST['prestasi']; 
$tahun = $_POST['tahun'];
$internasional = $_POST['internasional'];
$nasional = $_POST['nasional'];
$lokal = $_POST['lokal'];
$bukti = $_POST['bukti'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `prestasi`(dosen, prestasi, tahun, internasional, nasional, lokal,bukti, kode) VALUES ('$dosen', '$prestasi', '$tahun','$internasional', '$nasional','$lokal','$bukti', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}