<?php
include 'koneksi.php';
$luaran = $_POST['luaran'];
$tridharma = $_POST['tridharma'];
$id = $_POST['id'];


$query = "UPDATE luar SET luaran='$luaran', tridharma='$tridharma' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data12.php');
} else {
    header('Location: data12.php');
}
?>