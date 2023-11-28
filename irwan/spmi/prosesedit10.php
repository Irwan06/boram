<?php
include 'koneksi.php';
$judul = $_POST['judul'];
$jenis = $_POST['jenis'];
$status = $_POST['status'];
$id = $_POST['id'];


$query = "UPDATE penilitian SET judul='$judul', jenis='$jenis',  status='$status' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data10.php');
} else {
    header('Location: data10.php');
}
?>