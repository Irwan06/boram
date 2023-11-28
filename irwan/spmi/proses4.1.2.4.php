<?php
include 'koneksi.php';
$j_dts = $_POST['j_dts'];
$reguler = $_POST['reguler'];
$dosen = $_POST['dosen'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `dtps`(j_dts, reguler, dosen, kode) VALUES ('$j_dts', '$reguler', '$dosen','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}