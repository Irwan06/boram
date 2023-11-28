<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM akreditasi WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data2.php');
} else {
    header('location: data2.php');
} 