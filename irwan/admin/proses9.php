<?php
include 'koneksi.php';
$semester = $_POST['semester'];
$mk = $_POST['mk'];
$n_mk  = $_POST['n_mk'];
$teori = $_POST['teori'];
$praktikum = $_POST['praktikum'];
$praktik = $_POST['praktik'];
$sks = $_POST['sks'];
$pt = $_POST['pt'];
$upps = $_POST['upps'];
$ps = $_POST['ps'];
$sesuaian = $_POST['sesuaian'];
$perangkat = $_POST['perangkat'];
$kode = $_POST['kode'];


 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `cpl`(semester, mk, n_mk, teori, praktikum, praktik, sks, pt, upps, ps, sesuaian, perangkat, kode) VALUES ('$semester', '$mk', '$n_mk', '$teori', '$praktikum','$praktik','$sks', '$pt','$upps','$ps', '$sesuaian','$perangkat', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}