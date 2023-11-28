<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM pamon WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data5.php');
} else {
    header('location: data5.php');
} 