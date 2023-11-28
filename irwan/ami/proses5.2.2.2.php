<?php
include 'koneksi.php';
$jenis = $_POST['jenis'];
$jumla = $_POST['jumla']; 
$kwalitas = $_POST['kwalitas'];
$terawat = $_POST['terawat'];
$t_terawat = $_POST['t_terawat'];
$upps = $_POST['upps'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `prasarana`(jenis, jumla, kwalitas, terawat,t_terawat,upps, kode) VALUES ('$jenis', '$jumla', '$kwalitas','$terawat','$t_terawat','$upps', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data8.php');
} else {
  header('Location: data8.php');
}