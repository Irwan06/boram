<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['matkul'];
$pertemuan = $_POST['pertemuan'];
$j_pertemuan = $_POST['j_pertemuan'];
$dilaksanakan = $_POST['dilaksanakan'];
$kode = $_POST['kode'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `tetap`(dosen, kelas, sks,kuliah,matkul,pertemuan,j_pertemuan,dilaksanakan, kode) VALUES ('$dosen', '$kelas', '$sks','$kuliah','$matkul','$pertemuan','$j_pertemuan','$dilaksanakan', '$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data7.php');
} else {
  header('Location: data7.php');
}