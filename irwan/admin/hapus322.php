<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM luar_n WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data6.php');
} else {
    header('location: data6.php');
} 