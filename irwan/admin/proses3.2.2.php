<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$minat = $_POST['minat'];
$bakat = $_POST['bakat'];
$penelaran = $_POST['penelaran'];
$pembinaan = $_POST['pembinaan'];
$keporfesian = $_POST['keporfesian'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `layanan`(tahun, minat, bakat, penelaran, pembinaan, keporfesian, kode) VALUES ('$tahun', '$minat', '$bakat','$penelaran','$pembinaan','$keporfesian','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data6.php');
} else {
  header('Location: data6.php');
}