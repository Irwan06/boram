<?php
include 'koneksi.php';
$ket = $_POST['ket'];
$status = $_POST['status'];
$akredi = $_POST['akredi'];
$prodi = $_POST['prodi'];
$jurusan = $_POST['jurusan'];
$id = $_POST['id'];


$query = "UPDATE akreditasi SET ket='$ket', status='$status',  akredi='$akredi', prodi='$prodi', jurusan='$jurusan' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data2.php');
} else {
    header('Location: data2.php');
}
?>