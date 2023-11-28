<?php
include 'koneksi.php';
$kepakaran = $_POST['kepakaran']; 
$waktu = $_POST['waktu'];
$dtps  = $_POST['dtps'];
$layanan = $_POST['layanan'];
$tindak = $_POST['tindak'];
$kode = $_POST['kode'];



 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pkm`(kepakaran, waktu, dtps,layanan,tindak,  kode) VALUES ('$kepakaran', '$waktu', '$dtps','$layanan', '$tindak', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}