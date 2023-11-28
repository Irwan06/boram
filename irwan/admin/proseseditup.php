<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$pendidikan = $_POST['pendidikan'];
$penilitian = $_POST['penilitian'];
$pkm = $_POST['pkm'];
$publikasi = $_POST['publikasi'];
$inevstasi = $_POST['inevstasi'];
$id = $_POST['id'];


$query = "UPDATE upps1 SET tahun='$tahun', pendidikan='$pendidikan', 
 penilitian='$penilitian', pkm='$pkm', publikasi='$publikasi',inevstasi='$inevstasi'
  where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: upps2.php');
} else {
    header('Location: upps2.php');
}
?>