<?php
include 'koneksi.php';
$judul = $_POST['judul'];
$nama = $_POST['nama'];
$ketua = $_POST['ketua'];
$dosen = $_POST['dosen'];
$mahasiswa = $_POST['mahasiswa'];
$libat = $_POST['libat'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `aktivitas`(judul, nama, ketua, dosen, mahasiswa, libat, kode) VALUES ('$judul', '$nama','$ketua', '$dosen', '$mahasiswa', '$libat', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data10.php');
} else {
  header('Location: data10.php');
}