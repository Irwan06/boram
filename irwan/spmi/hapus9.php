<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM pendidikan WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data9.php');
} else {
    header('location: data9.php');
} 