<?php
include 'koneksi.php';
$dosen = $_POST['dosen'];
$ts = $_POST['ts'];
$ts1  = $_POST['ts1'];
$ts2 = $_POST['ts2'];
$rata = $_POST['rata'];
$ts3 = $_POST['ts3'];
$ts4 = $_POST['ts4'];
$ts5 = $_POST['ts5'];
$rata3 = $_POST['rata3'];
$program = $_POST['program'];
$pertemuan = $_POST['pertemuan'];
$kode = $_POST['kode'];


 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pkm`(dosen, ts, ts1, ts2, rata, ts3, ts4, ts5, rata3, program, pertemuan, kode) VALUES ('$dosen', '$ts', '$ts1', '$ts2', '$rata','$ts3','$ts4', '$ts5','$rata3','$program', '$pertemuan','$kode')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data9.php');
} else {
  header('Location: data9.php');
}