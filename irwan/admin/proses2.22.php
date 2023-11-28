<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$internasioanl = $_POST['internasioanl'];
$nasional = $_POST['nasional'];
$judul = $_POST['judul'];
$manfaat = $_POST['manfaat'];
$durasi = $_POST['durasi'];
$id = $_POST['id'];


$query = "UPDATE `2.2.2-2` SET nama='$nama', internasioanl='$internasioanl', 
 nasional='$nasional', judul='$judul', manfaat='$manfaat',durasi='$durasi' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data5.php');
} else {
    header('Location: data5.php');
}
?>