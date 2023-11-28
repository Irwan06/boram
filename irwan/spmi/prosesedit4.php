<?php
include 'koneksi.php';
$Visi = $_POST['Visi'];
$Misi = $_POST['Misi'];
$Tujuan = $_POST['Tujuan'];
$Strategi = $_POST['Strategi'];
$id = $_POST['id'];


$query = "UPDATE visi SET Visi='$Visi', Misi='$Misi',  Tujuan='$Tujuan', Strategi='$Strategi' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data4.php');
} else {
    header('Location: data4.php');
}
?>