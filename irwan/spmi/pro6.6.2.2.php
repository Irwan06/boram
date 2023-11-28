<?php
include 'koneksi.php';
$keg = $_POST['keg']; 
$dosen = $_POST['dosen'];
$frekuensi  = $_POST['frekuensi'];
$hasil = $_POST['hasil'];
$bukti = $_POST['bukti'];
$bukti1 = $_POST['bukti1'];
$kode = $_POST['kode'];



 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pkm`(keg, dosen, frekuensi,hasil,bukti,bukti1,  kode) VALUES ('$keg', '$dosen', '$frekuensi','$hasil', '$bukti','$bukti1', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}