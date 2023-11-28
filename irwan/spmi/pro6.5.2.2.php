<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$jumlah = $_POST['jumlah'];
$semester  = $_POST['semester'];
$kode = $_POST['kode'];


 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pkm`(dosen, jumlah, semester,  kode) VALUES ('$dosen', '$jumlah', '$semester',  '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}