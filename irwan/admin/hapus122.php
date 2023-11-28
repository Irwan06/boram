<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM `2.2.2-2` WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data5.php');
} else {
    header('location: data5.php');
} 