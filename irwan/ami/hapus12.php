<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM luar WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data12.php');
} else {
    header('location: data12.php');
} 