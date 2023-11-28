<?php
 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE FROM visi WHERE `id`='$id'";
$hasil = mysqli_query($db, $query);


if ($hasil == true) {
    header('location: upps1.php');
} else {
    header('location: upps1.php');
} 