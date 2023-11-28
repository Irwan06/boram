<?php
include 'koneksi.php';
$ket = $_POST['ket'];
$status = $_POST['status'];
$akreditasi = $_POST['akreditasi'];
$prodi = $_POST['prodi'];
$id = $_POST['id'];


$query = "UPDATE prodi SET ket='$ket', status='$status',  akreditasi='$akreditasi', prodi='$prodi' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data.php');
} else {
    header('Location: data.php');
}
?>