<?php
include 'koneksi.php';
$keuangan = $_POST['keuangan'];
$sarana = $_POST['sarana'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `keuangan`(keuangan, sarana) VALUES ('$keuangan', '$sarana')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data8.php');
} else {
  header('Location: data8.php');
}