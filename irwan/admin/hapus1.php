<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM spmi WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data1.php');
} else {
    header('location: data1.php');
} 