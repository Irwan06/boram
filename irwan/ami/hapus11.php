<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM kkn WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data11.php');
} else {
    header('location: data11.php');
} 