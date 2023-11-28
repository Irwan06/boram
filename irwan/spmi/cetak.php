<?php
include 'koneksi.php';
$file = $_GET['file'];
$query = "SELECT * FROM  berkas where file='$file'";
$hasil = mysqli_query($db, $query);
$pembimbing = mysqli_fetch_assoc($hasil);
?>
<embed src="../foto/<?php echo $pembimbing['file']; ?>" type="application/pdf" width="100%" height="800"/>