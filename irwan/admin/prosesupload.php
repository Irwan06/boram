<?php
include 'koneksi.php';
$judul = $_POST['judul'];
 $nama_file = trim($_FILES['file']['name']);
  $file_temp = $_FILES['file']['tmp_name'];
  $folder    = "../foto";
  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `berkas`(file, judul) VALUES ( '$nama_file', '$judul')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: dashboard.php');
} else {
  header('Location: dashboard.php'); 
}