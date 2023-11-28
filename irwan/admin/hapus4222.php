<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM ps WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data7.php');
} else {
    header('location: data7.php');
} 