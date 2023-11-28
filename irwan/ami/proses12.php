<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$lulus = $_POST['lulus']; 
$minimun = $_POST['minimun'];
$rata = $_POST['rata'];
$maksumin = $_POST['maksumin'];
$lokal = $_POST['lokal'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `ipk9`(tahun, lulus, minimun, rata, maksumin,lokal, kode) VALUES ('$tahun', '$lulus', '$minimun', '$rata', '$maksumin','$lokal', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data12.php');
} else {
  header('Location: data12.php');
}