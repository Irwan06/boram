<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$keahlian = $_POST['keahlian']; 
$kegiatan = $_POST['kegiatan'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$manfaat = $_POST['manfaat'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `kompotensi`(dosen, keahlian, kegiatan, tempat, waktu, manfaat, kode) VALUES ('$dosen', '$keahlian', '$kegiatan','$tempat', '$waktu','$manfaat', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}