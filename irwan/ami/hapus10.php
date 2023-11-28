<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM penilitian WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: data10.php');
} else {
    header('location: data10.php');
} 