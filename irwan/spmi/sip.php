<?php
include 'koneksi.php';

$queryk = "SELECT * FROM akreditasi";
$hasilk = mysqli_query($db, $queryk);
$dpk1 = array(); 

$queryt = "SELECT * FROM spmi"; 
$hasilt = mysqli_query($db, $queryt);
$dpk2 = array();

$queryt = "SELECT * FROM prodi";
$hasilti = mysqli_query($db, $queryt);
$dpk3 = array();


$queryt = "SELECT * FROM kinerja";
$hasilt2 = mysqli_query($db, $queryt);
$dpk5 = array();

?>