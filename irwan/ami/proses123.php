<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$tes = $_POST['tes']; 
$tes1 = $_POST['tes1'];
$tes2 = $_POST['tes2'];
$jumlah = $_POST['jumlah'];
$rata2 = $_POST['rata2'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `Tugas`(dosen, tes, tes1, tes2, jumlah, rata2, kode) VALUES ('$dosen', '$tes', '$tes1','$tes2', '$jumlah','$rata2','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}