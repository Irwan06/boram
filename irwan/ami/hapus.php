<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM prodi WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data.php');
} else {
    header('location: data.php');
} 