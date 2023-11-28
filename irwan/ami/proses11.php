<?php
include 'koneksi.php';
$judul = $_POST['judul'];
$ketua = $_POST['ketua'];
$tim = $_POST['tim'];
$anggota = $_POST['anggota'];
$mahasiswa = $_POST['mahasiswa'];
$idreee = $_POST['idreee'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `8.2.2`(judul, ketua, tim, anggota, mahasiswa, idreee, kode) VALUES ('$judul', '$ketua', '$tim', '$anggota', '$mahasiswa', '$idreee', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data11.php');
} else {
  header('Location: data11.php');
}