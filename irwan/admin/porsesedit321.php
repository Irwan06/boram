<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$tampung = $_POST['tampung'];
$pendaftar = $_POST['pendaftar'];
$lulus = $_POST['lulus'];
$baru = $_POST['baru'];
$mahas = $_POST['mahas'];
$id = $_POST['id'];


$query = "UPDATE reguler SET tahun='$tahun', tampung='$tampung',  pendaftar='$pendaftar',
 lulus='$lulus', baru='$baru', mahas='$mahas' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data5.php');
} else {
    header('Location: data5.php');
}
?>