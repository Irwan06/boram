<?php
include 'koneksi.php';
$Visi = $_POST['Visi'];
$Misi = $_POST['Misi'];
$Tujuan =$_POST['Tujuan'];
$Strategi =$_POST['Strategi'];

 // $nama_file = trim($_FILES['file']['name']);
 //  $file_temp = $_FILES['file']['tmp_name'];
 //  $folder    = "../foto";
 //  move_uploaded_file($file_temp, "$folder/$nama_file");

$query = "INSERT INTO `visi`(Visi, Misi, Tujuan, Strategi) VALUES ('$Visi', '$Misi', '$Tujuan','$Strategi')";
  $hasil = mysqli_query($db, $query);

if ($hasil == true) {
  header('Location: data4.php');
} else {
  header('Location: data4.php');
}