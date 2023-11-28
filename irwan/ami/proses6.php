<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$tampung = $_POST['tampung'];
$pendaftar = $_POST['pendaftar'];
$lulus = $_POST['lulus'];
$baru = $_POST['baru'];
$mahas = $_POST['mahas'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `reguler`(tahun, tampung, pendaftar, lulus, baru, mahas, kode) VALUES ('$tahun', '$tampung', '$pendaftar','$lulus','$baru','$mahas','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data6.php');
} else {
  header('Location: data6.php');
}