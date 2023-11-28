<?php
include 'koneksi.php';
$dosen_t = $_POST['dosen_t'];
$nidn = $_POST['nidn'];
$tgl = $_POST['tgl'];
$sertifikat = $_POST['sertifikat'];
$jabatan = $_POST['jabatan'];
$gelar = $_POST['gelar'];
$pt = $_POST['pt'];
$bidang = $_POST['bidang'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `ps`(dosen_t, nidn, tgl, sertifikat, jabatan, gelar, pt, bidang, kode) VALUES ('$dosen_t', '$nidn', '$tgl','$sertifikat', '$jabatan','$gelar','$pt','$bidang','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}