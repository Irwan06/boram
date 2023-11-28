<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$ps = $_POST['ps'];
$pt = $_POST['pt'];
$p_lain = $_POST['p_lain'];
$sks = $_POST['sks'];
$p2m = $_POST['p2m'];
$sendirii = $_POST['sendirii'];
$lain = $_POST['lain'];
$beban = $_POST['beban'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `4.1.2.5`(dosen, ps, pt,p_lain,sks,p2m,sendirii,lain,beban, kode) VALUES ('$dosen', '$ps', '$pt','$p_lain','$sks','$p2m','$sendirii','$lain','$beban', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}