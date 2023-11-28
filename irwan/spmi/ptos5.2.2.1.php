<?php
include 'koneksi.php';
$jenis = $_POST['jenis'];
$jumla = $_POST['jumla']; 
$luas = $_POST['luas'];
$sd = $_POST['sd'];
$sw = $_POST['sw'];
$terawat = $_POST['terawat'];
$t_terawat = $_POST['t_terawat'];
$pengguna = $_POST['pengguna'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `prasarana`(jenis, jumla, luas, sd, sw, terawat,t_terawat,pengguna, kode) VALUES ('$jenis', '$jumla', '$luas','$sd', '$sw','$terawat','$t_terawat','$pengguna', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data8.php');
} else {
  header('Location: data8.php');
}