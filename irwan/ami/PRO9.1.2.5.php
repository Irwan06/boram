<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$mahasiswa = $_POST['mahasiswa']; 
$akhir6 = $_POST['akhir6'];
$akhir5 = $_POST['akhir5'];
$akhir4 = $_POST['akhir4'];
$akhir3 = $_POST['akhir3'];
$tes = $_POST['tes'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `masa`(tahun, mahasiswa, akhir6, akhir5, akhir4,tes, kode) VALUES ('$tahun', '$mahasiswa', '$akhir6', '$akhir5', '$akhir4','$tes', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data12.php');
} else {
  header('Location: data12.php'); 
}