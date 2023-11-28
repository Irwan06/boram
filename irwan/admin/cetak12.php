<!DOCTYPE html>
<html>
    <head>
        <title>cetak Laporan</title>
</head>
<body>
    <label><h2><center>Daftar Laporan</center></h2></label>
<h3 class="card-title center">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Data Program Studi</h3><br>
    <table border="1">
        <thead>
            <tr>
              <th rowspan="2">NO</th>
              <th rowspan="2">Jenis Program Studi</th>
              <th rowspan="2">Nama Program studi</th>
              <th colspan="4" class="text-center"> Akreditasi Program Studi</th>
              <th rowspan="2"> Jumlah Mahasiswa Saat TS</th>
              <th rowspan="2">Jumlah DTPS saat TS</th>
              <th rowspan="2">Rerata IPK</th>
              <th rowspan="2">Rerata Masa Studi</th>
            </tr>
            <tr>
                <th>Status/Peringkat</th>
                <th>Nomor SK</th>
                <th>Tanggal SK</th>
                <th>Tanggal.Kadaluarsa</th>
            </tr>
            </thead>
            <tbody>
               <?php 
                   $no = 0; 
                            include 'koneksi.php';
                            $query = "SELECT * FROM `visi`";
                            $hasil = mysqli_query($db, $query);
                            while ($row = mysqli_fetch_assoc($hasil)) {
                      $no++;
                            ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $row['j_program'] ?></td>
              <td><?php echo $row['n_program'] ?></td>
              <td><?php echo $row['status'] ?></td>
              <td><?php echo $row['n_sk'] ?></td>
              <td><?php echo $row['tgl_sk'] ?></td>
              <td><?php echo $row['t_kad'] ?></td>
              <td><?php echo $row['j_mahasiswa'] ?></td>
              <td><?php echo $row['dtps'] ?></td>
              <td><?php echo $row['ipk'] ?></td>
              <td><?php echo $row['studi'] ?></td>
              </tr>
           <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Data Program Studi</h3><br>
    <table border="1">
        <thead>
        <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Tahun Akademik</th>
                    <th colspan="5" class="text-center"> Jenis Dana</th>
                     <th rowspan="2">AKSI</th>
                  </tr>
                  <tr>
                      <th>Pendidikan/mahasiswa/tahun</th>
                      <th>Penelitian/dosen/tahun</th>
                      <th>PkM/dosen/tahun</th>
                      <th>Publikasi/dosen/tahun</th>
                      <th>Investasi/tahun</th>
                  </tr>
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `upps1`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['pendidikan'] ?></td>
                    <td><?php echo $row['penilitian'] ?></td>
                    <td><?php echo $row['pkm'] ?></td>
                    <td><?php echo $row['publikasi'] ?></td>
                    <td><?php echo $row['inevstasi'] ?></td>
                    <td><a href="up1.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Tabel 2.2.2 Bagian 1 - Kerjasama Bidang Pendidikan</h3><br>
    <table border="1">
        <thead>
        </tr>
        </tr>
        <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Nama Lembaga Mitra</th>
                    <th colspan="3" class="text-center">Tingkat</th>
                    <th rowspan="2">Judul dan Ruang Lingkup Kerjasama</th>
                    <th rowspan="2">Manfaat/Output</th>
                    <th rowspan="2">Durasi</th>
                    <th rowspan="2">Bukti/Tautan</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                  <tr>
                      <th>Internasional</th>
                      <th>Nasional</th>
                      <th>Lokal</th>

                  </tr>
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `2.2.2-1`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['internasioanl'] ?></td>
                    <td><?php echo $row['nasional'] ?></td>
                    <td><?php echo $row['lokal'] ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['manfaat'] ?></td>
                    <td><?php echo $row['durasi']?></td>
                    <td><?php echo $row['bukti'] ?></td>
                    <td><a href="hapus123.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td></td>
                    <td>
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Sumber Daya Manusia</h3><br>
    <table border="1">
        <thead>
       
        <tr>
                    <th>NO</th>
                    <th>Tahun Akademik</th>
                    <th>Jenis Program Layanan dan  Pembinaan Minat</th>
                    <th>Jenis Program Layanan dan Pembinaan Bakat</th>
                    <th>Jenis Program Layanan dan Pembinaan Penalaran</th>
                    <th>Jenis Program Layanan dan Pembinaan Kesejahteraan</th>
                    <th>Jenis Program Layanan dan Pembinaan Keprofesian</th>
                  </tr>
                 
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `layanan`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['minat'] ?></td>
                    <td><?php echo $row['bakat'] ?></td>
                    <td><?php echo $row['penelaran'] ?></td>
                    <td><?php echo $row['pembinaan'] ?></td>
                    <td><?php echo $row['keporfesian'] ?></td>
                    
                  </tr>
                 <?php } ?>
    </table>
    <h3 class="card-title center">Sumber Daya Manusia</h3><br>
    <table border="1">
        <thead>
        
       <tr>
                    <th>NO</th>
                    <th>Nama Lengkap Dosen Tetap</th>
                    <th>NIDN/NIDK</th>
                    <th>Tanggal Lahir</th>
                    <th>Sertifikat Pendidik</th>
                    <th>Jabatan Fungsional</th>
                    <th>Gelar Akademik</th>
                    <th>Pendidikan S1, S2, S3  dan Asal PT </th>
                    <th>Bidang Keahlian Setiap Jenjang Pendidikan</th>
                  </tr>
                 
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `ps`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen_t'] ?></td>
                    <td><?php echo $row['nidn'] ?></td>
                    <td><?php echo $row['tgl'] ?></td>
                    <td><?php echo $row['sertifikat'] ?></td>
                    <td><?php echo $row['jabatan'] ?></td>
                    <td><?php echo $row['gelar'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['bidang'] ?></td>
                    
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Keuangan</h3><br>
    <table border="1">
        <thead>
        
        <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Sumber Dana</th>
                    <th rowspan="2">Jenis Dana</th>
                    <th colspan="4" class="text-center">Jumlah Dana (dalam jutaan)</th>
                  </tr>
                  <tr>
                      <th>TS-2</th>
                      <th>TS-1</th>
                      <th>TS</th>
                      <th>Rata-Rata</th>

                  </tr>
                 
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `dana`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dana'] ?></td>
                    <td><?php echo $row['j_dana'] ?></td>
                    <td><?php echo $row['tes'] ?></td>
                    <td><?php echo $row['tes1'] ?></td>
                    <td><?php echo $row['tes2'] ?></td>
                    <td><?php echo $row['rata'] ?></td>
                    
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Sumber Daya Manusia</h3><br>
    <table border="1">
        <thead>
        
       <tr>
                    <th>NO</th>
                    <th>Nama Lengkap Dosen Tetap</th>
                    <th>NIDN/NIDK</th>
                    <th>Tanggal Lahir</th>
                    <th>Sertifikat Pendidik</th>
                    <th>Jabatan Fungsional</th>
                    <th>Gelar Akademik</th>
                    <th>Pendidikan S1, S2, S3  dan Asal PT </th>
                    <th>Bidang Keahlian Setiap Jenjang Pendidikan</th>
                  </tr>
                 
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `ps`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen_t'] ?></td>
                    <td><?php echo $row['nidn'] ?></td>
                    <td><?php echo $row['tgl'] ?></td>
                    <td><?php echo $row['sertifikat'] ?></td>
                    <td><?php echo $row['jabatan'] ?></td>
                    <td><?php echo $row['gelar'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['bidang'] ?></td>
                    
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Pendidikan</h3><br>
    <table border="1">
        <thead>
        
        <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Semester</th>
                    <th rowspan="2">Kode MK</th>
                    <th rowspan="2">Nama Mata Kuliah</th>
                    <th colspan="3" class="text-center">Jenis Mata Kuliah</th>
                    <th rowspan="2">Jenis Mata Kuliah</th>
                    <th colspan="3" class="text-center">Unit Penyelenggara*</th>
                    <th rowspan="2">Kesesuaian dengan CPL</th>
                    <th rowspan="2">Perangkat Pembelajaran</th>
                  </tr>
                  <tr>
                      <th>Teori</th>
                      <th>Praktikum</th>
                      <th>Praktik</th>
                      <th>PT</th>
                      <th>UPPS</th>
                      <th>PS</th>
                  </tr>
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `cpl`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['semester'] ?></td>
                    <td><?php echo $row['mk'] ?></td>
                    <td><?php echo $row['n_mk'] ?></td>
                    <td><?php echo $row['teori'] ?></td>
                    <td><?php echo $row['praktikum'] ?></td>
                    <td><?php echo $row['praktik'] ?></td>
                    <td><?php echo $row['sks'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['upps'] ?></td>
                    <td><?php echo $row['ps'] ?></td>
                    <td><?php echo $row['sesuaian'] ?></td>
                    <td><?php echo $row['perangkat'] ?></td>
                    
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
    <h3 class="card-title center">Penelitian</h3><br>
    <table border="1">
        <thead>
        <tr>
                    <th >NO</th>
                    <th >Tahun Akademik</th>
                    <th >Judul Penelitian</th>
                    <th >Nama Ketua Tim</th>
                    <th>Kepakaran Ketua Tim</th>
                    <th>Nama dan Identitas Dosen Anggota Penelitian</th>
                    <th>Nama dan Identitas Mahasiswa yang dilibatkan</th>
                  </tr>
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `aktivitas`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['ketua'] ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['mahasiswa'] ?></td>
                    <td><?php echo $row['libat'] ?></td>
                    
                  </tr>
                 <?php } ?>
            </tbody>
            <h3 class="card-title center">Pengabdian Kepada masyarakat</h3><br>
    <table border="1">
        <thead>
        <tr>
                    <th >NO</th>
                    <th >Tahun Akademik</th>
                    <th >Judul PkM</th>
                    <th >Nama Ketua Tim</th>
                    <th>Kepakaran Ketua Tim*</th>
                    <th>Nama dan Identitas Dosen Anggota PkM</th>
                    <th>Nama dan Identitas Mahasiswa yang dilibatkan</th>
                  </tr>
            </thead>
            <tbody>
            <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `8.2.2`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['ketua'] ?></td>
                    <td><?php echo $row['tim'] ?></td>
                    <td><?php echo $row['anggota'] ?></td>
                    <td><?php echo $row['mahasiswa'] ?></td>
                    <td><?php echo $row['idreee'] ?></td>

                    
                  </tr>
                 <?php } ?>
            </tbody>
    </table>
</body>
</html>
<script>
    window.print();
</script>
