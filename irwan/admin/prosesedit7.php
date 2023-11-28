<?php
include 'koneksi.php';
$jumlah = $_POST['jumlah'];
$tahun = $_POST['tahun'];
$status = $_POST['status'];
$id = $_POST['id'];


$query = "UPDATE sumber SET jumlah='$jumlah', tahun='$tahun',  status='$status' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data7.php');
} else {
    header('Location: data7.php');
}
?>