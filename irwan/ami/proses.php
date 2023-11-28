<?php
include 'koneksi.php';
$ket = $_POST['ket'];
$status = $_POST['status'];
$akreditasi =$_POST['akreditasi'];
$prodi =$_POST['prodi'];

 $nama_file = trim($_FILES['file']['name']);
  $file_temp = $_FILES['file']['tmp_name'];
  $folder    = "../foto";
  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `prodi`(ket, status, file,  akreditasi, prodi) VALUES ('$ket', '$status', '$nama_file',  '$akreditasi','$prodi')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data.php');
} else {
  header('Location: data.php');
}