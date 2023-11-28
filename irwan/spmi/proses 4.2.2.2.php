<?php
include 'koneksi.php';
$kependidikan = $_POST['kependidikan'];
$status = $_POST['status']; 
$bidang = $_POST['bidang'];
$pendidikan = $_POST['pendidikan'];
$unit = $_POST['unit'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `profil`(kependidikan, status, bidang, pendidikan, unit,  kode) VALUES ('$kependidikan', '$status', '$bidang','$pendidikan', '$unit', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}