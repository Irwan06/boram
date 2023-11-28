<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM `upps1` WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data4.php');
} else {
    header('location: data4.php');
} 