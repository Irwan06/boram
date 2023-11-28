<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$minat = $_POST['minat'];
$bakat = $_POST['bakat'];
$penelaran = $_POST['penelaran'];
$pembinaan = $_POST['pembinaan'];
$keporfesian = $_POST['keporfesian'];
$id = $_POST['id'];


$query = "UPDATE layanan SET tahun='$tahun', minat='$minat', 
 bakat='$bakat', penelaran='$penelaran', pembinaan='$pembinaan',keporfesian='$keporfesian'
  where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data6.php');
} else {
    header('Location: data6.php');
}
?>