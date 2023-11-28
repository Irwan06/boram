<?php
include 'koneksi.php';
$tatapamon = $_POST['tatapamon'];
$tatakelola = $_POST['tatakelola'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `pamon`(tatapamon, tatakelola) VALUES ('$tatapamon', '$tatakelola')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data5.php');
} else {
  header('Location: data5.php');
}