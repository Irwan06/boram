<?php
include 'koneksi.php';
$kurikulum = $_POST['kurikulum'];
$akademik = $_POST['akademik'];
$profesi = $_POST['profesi'];
$id = $_POST['id'];


$query = "UPDATE pendidikan SET kurikulum='$kurikulum', akademik='$akademik',  profesi='$profesi' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data9.php');
} else {
    header('Location: data9.php');
}
?>