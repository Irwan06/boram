<?php
include 'koneksi.php';
$mahasiswa = $_POST['mahasiswa']; 
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `ilmiah`( mahasiswa, judul, jumlah, kode) VALUES ( '$mahasiswa', '$judul', '$jumlah', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data12.php');
} else {
  header('Location: data12.php'); 
}