<?php
include 'koneksi.php';
$dosen_t = $_POST['dosen_t'];
$nidn = $_POST['nidn'];
$tgl = $_POST['tgl'];
$pt = $_POST['pt'];
$sertifikat = $_POST['sertifikat'];
$jabatan = $_POST['jabatan'];
$gelar = $_POST['gelar'];
$bidang = $_POST['bidang'];
$id = $_POST['id'];


$query = "UPDATE ps SET dosen_t='$dosen_t', nidn='$nidn', 
 tgl='$tgl', pt='$pt', sertifikat='$sertifikat',jabatan='$jabatan',gelar='$gelar', bidang='$bidang'
  where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data7.php');
} else {
    header('Location: data7.php');
}
?>