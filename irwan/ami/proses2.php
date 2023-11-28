<?php
include 'koneksi.php';
$ket = $_POST['ket'];
$status = $_POST['status'];
$akredi =$_POST['akredi'];
$prodi =$_POST['prodi'];
$jurusan = $_POST['jurusan'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `akreditasi`(ket, status,  akredi, prodi,jurusan) VALUES ('$ket', '$status',  '$akredi','$prodi','$jurusan')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data2.php');
} else {
  header('Location: data2.php');
}