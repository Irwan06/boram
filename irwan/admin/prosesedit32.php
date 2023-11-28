<?php
include 'koneksi.php';
$tahun = $_POST['tahun'];
$negeri = $_POST['negeri'];
$jk_l = $_POST['jk_l'];
$jk_p = $_POST['jk_p'];
$reguler = $_POST['reguler'];
$id = $_POST['id'];


$query = "UPDATE luar_n SET tahun='$tahun', negeri='$negeri', 
 jk_l='$jk_l', jk_p='$jk_p', reguler='$reguler'
  where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data6.php');
} else {
    header('Location: data6.php');
}
?>