<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM ami WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data3.php');
} else {
    header('location: data3.php');
} 