<?php

session_start();
if (empty($_SESSION['user'])) {
  header('Location: ../index.php');
  exit();
}
include 'content/meta.php';
include 'content/navbar.php';
include 'content/sidebar.php';
?> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sumber Daya Manusia</h3><br>
               
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nomor dan Judul Tabel</th>
                    <th>Nama Sheet</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <tr>
                    <td>1</td>
                    <td>Tabel 4.1.2.2 DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS</td>
                    <td><a href="4.1.2.2.php?id=4.1.2.2">4.1.2.2</a> </td>
                  </tr>
                 <tr>
                    <td>2</td>
                    <td>Tabel 4.1.2.3 DTPS yang Bidang Keahliannya di Luar Bidang PS</td>
                    <td><a href="4.1.2.3.php?id=4.1.2.3"> 4.1.2.3</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Tabel 4.1.2.4 Rasio DTPS terhadap Mahasiswa Reguler</td>
                    <td><a href="4.1.2.4.php?id=4.1.2.4">4.1.2.4</a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Tabel 4.1.2.5 Beban Kerja Dosen DTPS</td>
                    <td><a href="4.1.2.5.php?id=4.1.2.5">4.1.2.5</a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Tabel 4.1.2.6 Kegiatan Mengajar Dosen Tetap - Semester Gasal</td>
                    <td><a href="4.1.2.6-1.php?id=4.1.2.6-1">4.1.2.6-1</a> </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Tabel 4.1.2.6 Kegiatan Mengajar Dosen Tetap - Semester Genap</td>
                    <td><a href="4.1.2.6-2.php?id=4.1.2.6-2">4.1.2.6-2</a></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Tabel 4.1.2.7 Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi</td>
                    <td><a href="4.1.2.7.php?id=4.1.2.7">4.1.2.7</a> </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Tabel 4.1.2.8 Prestasi DTPS</td>
                    <td><a href="4.1.2.8.php?id=4.1.2.8">4.1.2.8</a> </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Tabel 4.1.2.9 Pengembangan Kompetensi DTPS - pada TS</td>
                    <td><a href="4.1.2.9-1.php?id=4.1.2.9-1.">4.1.2.9-1</a> </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Tabel 4.1.2.9 Pengembangan Kompetensi DTPS - pada TS-1</td>
                    <td><a href="4.1.2.9-2.php?id=4.1.2.9-2">4.1.2.9-2</a> </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Tabel 4.1.2.9 Pengembangan Kompetensi DTPS - pada TS-2</td>
                    <td><a href="4.1.2.9-3.php?id=4.1.2.9-3">4.1.2.9-3</a></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Tabel 4.2.2.2 Profil Tendik</td>
                    <td><a href=" 4.2.2.2.php?id= 4.2.2.2"> 4.2.2.2</a></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Tabel 4.2.2.3 Pengembangan Kompetensi dan Karier Tendik</td>
                    <td><a href="4.2.2.3.php?id=4.2.2.3">4.2.2.3</a></td>
                  </tr>
                  </tbody>
                  
                </table>
                                 <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                            <i class="fa fa-plus"></i>
                                           Upload Berkas
                                        </button>
                <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `berkas`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                <a href="cetak.php?file=<?php echo $row['file'] ?>"><?php echo $row['file'] ?></</a>
                 <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->   
    
  </div>

<?php
include 'content/footer.php';
?>
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
            </div>
            <div class="modal-body">
                <h5 class="font-weight-bold">Tambah Data</h5>
                <form action="prosesupload.php" method="post" enctype="multipart/form-data">
                    

                    <div class="form-group">
                       
                        <td><input type="hidden" class="form-control" name="judul" value="Data Sumber Daya Manusia"  required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nomor dan Judul Tabel</label>
                        <td><input type="file" class="form-control" name="file" placeholder="Nomor dan Judul Tabel" required accept=".pdf"></td>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" onClick="return confirm('anda yakin simpan data ini ?');"><i
                        class="fa fa-save"> Simpan</i></button>
                </form>
            </div>
        </div>
    </div>
</div>