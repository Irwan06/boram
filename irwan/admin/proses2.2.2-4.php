<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$internasioanl = $_POST['internasioanl'];
$nasional = $_POST['nasional'];
$lokal = $_POST['lokal'];
$judul = $_POST['judul'];
$manfaat = $_POST['manfaat'];
$durasi = $_POST['durasi'];
$bukti =$_POST['bukti'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `2.2.2-4`(kode, nama,internasioanl, nasional, lokal, judul, manfaat, durasi, bukti) VALUES ('$kode', '$nama','$internasioanl','$nasional','$lokal','$judul', '$manfaat', '$durasi','$bukti')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data5.php');
} else {
  header('Location: data5.php');
}