<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$n_program = $_POST['n_program'];
$j_program = $_POST['j_program'];
$status =$_POST['status'];
$n_sk =$_POST['n_sk'];
$tgl_sk = $_POST['tgl_sk'];
$t_kad = $_POST['t_kad'];
$j_mahasiswa = $_POST['j_mahasiswa'];
$dtps = $_POST['dtps'];
$ipk = $_POST['ipk'];
$studi = $_POST['studi'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `visi`(kode, n_program, j_program, status, n_sk, tgl_sk, t_kad, j_mahasiswa, dtps, ipk, studi) VALUES ('$kode','$n_program', '$j_program', '$status','$n_sk','$tgl_sk','$t_kad','$j_mahasiswa','$dtps','$ipk','$studi')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data4.php');
} else {
  header('Location: data4.php');
}