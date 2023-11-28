<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM layanan WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data6.php');
} else {
    header('location: data6.php');
} 