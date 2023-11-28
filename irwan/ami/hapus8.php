<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM keuangan WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data8.php');
} else {
    header('location: data8.php');
} 