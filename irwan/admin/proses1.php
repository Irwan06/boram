<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$username =$_POST['username'];
$password = md5($_POST['password']);
$level = 'spmi';

 $nama_file = trim($_FILES['file']['name']);
  $file_temp = $_FILES['file']['tmp_name'];
  $folder    = "../foto";
  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `spmi`(nama, nip, file,  username, password, level) VALUES ('$nama', '$nip', '$nama_file',  '$username','$password','$level')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data1.php');
} else {
  header('Location: data1.php');
}

