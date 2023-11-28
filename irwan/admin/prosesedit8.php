<?php
include 'koneksi.php';
$keuangan = $_POST['keuangan'];
$sarana = $_POST['sarana'];
$prasaran = $_POST['prasaran'];
$id = $_POST['id'];


$query = "UPDATE keuangan SET keuangan='$keuangan', sarana='$sarana',  prasaran='$prasaran' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data8.php');
} else {
    header('Location: data8.php');
}
?>