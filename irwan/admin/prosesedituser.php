<?php
include 'koneksi.php';
$j_program = $_POST['j_program'];
$n_program = $_POST['n_program'];
$status = $_POST['status'];
$j_mahasiswa = $_POST['j_mahasiswa'];
$n_sk = $_POST['n_sk'];
$ipk = $_POST['ipk'];
$studi = $_POST['studi'];
$id = $_POST['id'];


$query = "UPDATE visi SET j_program='$j_program', n_program='$n_program', 
 status='$status', j_mahasiswa='$j_mahasiswa', n_sk='$n_sk',ipk='$ipk', studi='$studi' where id='$id' ";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: upps1.php');
} else {
    header('Location: upps1.php');
}
?>