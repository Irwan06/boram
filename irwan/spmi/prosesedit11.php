<?php
include 'koneksi.php';
$kegiatan = $_POST['kegiatan'];
$unit = $_POST['unit'];
$status = $_POST['status'];
$id = $_POST['id'];


$query = "UPDATE kkn SET kegiatan='$kegiatan', unit='$unit',  status='$status' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data11.php');
} else {
    header('Location: data11.php');
}
?>