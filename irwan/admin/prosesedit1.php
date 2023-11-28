<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = md5($_POST['password']) ;
$id = $_POST['id'];


$query = "UPDATE spmi SET nama='$nama', jk='$jk',  username='$username', password='$password' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: data1.php');
} else {
    header('Location: data1.php');
}
?>