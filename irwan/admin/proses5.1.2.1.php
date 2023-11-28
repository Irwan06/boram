<?php
include 'koneksi.php';
$dana = $_POST['dana'];
$j_dana = $_POST['j_dana']; 
$tes = $_POST['tes'];
$tes1 = $_POST['tes1'];
$tes2 = $_POST['tes2'];
$rata = $_POST['rata'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `dana`(dana, j_dana, tes, tes1, tes2, rata, kode) VALUES ('$dana', '$j_dana', '$tes','$tes1', '$tes2','$rata', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data8.php');
} else {
  header('Location: data8.php');
}