<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$negeri = $_POST['negeri'];
$jk_l = $_POST['jk_l'];
$jk_p = $_POST['jk_p'];
$reguler = $_POST['reguler'];
$kode = $_POST['kode'];
 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `luar_n`(tahun, negeri, jk_l, jk_p, reguler,  kode) VALUES ('$tahun', '$negeri', '$jk_l','$jk_p','$reguler','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data6.php');
} else {
  header('Location: data6.php');
}