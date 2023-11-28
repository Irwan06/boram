<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tgl = $_POST['tgl'];
$id = $_POST['id'];


$query = "UPDATE mahasiswa SET nama='$nama', nik='$nik',  tgl='$tgl' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data6.php');
} else {
    header('Location: data6.php');
}
?>