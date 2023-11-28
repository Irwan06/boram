<?php
include 'koneksi.php';
$tatapamon = $_POST['tatapamon'];
$kerjasma = $_POST['kerjasma'];
$tatakelola = $_POST['tatakelola'];
$id = $_POST['id'];


$query = "UPDATE pamon SET tatapamon='$tatapamon', kerjasma='$kerjasma',  tatakelola='$tatakelola' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data5.php');
} else {
    header('Location: data5.php');
}
?>