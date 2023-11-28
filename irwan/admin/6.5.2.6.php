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
                <h3 class="card-title">Tabel 6.5.2.6 Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan</h3><br>
                 <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                            <i class="fa fa-plus"></i>
                                            Tambah Data
                                        </button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" border="1">
                  <thead>
                  <tr>
                    <th rowspan="3">NO</th>
                    <th rowspan="3">Nama Dosen Pembimbing Tugas Akhir</th>
                    <th colspan="8" class="text-center">Banyaknya Mahasiswa Bimbingan</th>
                    <th rowspan="3">Rata-Rata Jumlah  Bimbingan di semua Program</th>
                    <th rowspan="3">Rata-Rata Banyaknya Pertemuan</th>
                  </tr>
                  <tr>
                      <th colspan="4"  class="text-center">Di PS Sendiri</th>
                      <th colspan="4"  class="text-center">Di PS Lain</th>
                  </tr>
                  <tr>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                    <td>Rata²</td>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                    <td>Rata²</td>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `pkm`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['ts'] ?></td>
                    <td><?php echo $row['ts1'] ?></td>
                    <td><?php echo $row['ts2'] ?></td>
                    <td><?php echo $row['rata'] ?></td>
                    <td><?php echo $row['ts3'] ?></td>
                    <td><?php echo $row['ts4'] ?></td>
                    <td><?php echo $row['ts5'] ?></td>
                    <td><?php echo $row['rata3'] ?></td>
                    <td><?php echo $row['program'] ?></td>
                    <td><?php echo $row['pertemuan'] ?></td>
                    
                  </tr>
                 <?php } ?>
                  </tbody>
                  
                </table>
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
                <form action="pro6.5.2.6.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="6.5.2.6" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Dosen Pembimbing Tugas Akhir</label>
                        <td><input type="text" class="form-control" name="dosen" placeholder="Nama Dosen Pembimbing Tugas Akhir" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TS-2</label>
                        <td><input type="text" class="form-control" name="ts" placeholder="TS-2" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">TS-1</label>
                        <td><input type="text" class="form-control" name="ts1" placeholder="TS-1" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">TS</label>
                        <td><input type="text" class="form-control" name="ts2" placeholder="TS" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata²</label>
                        <td><input type="text" class="form-control" name="rata" placeholder="Rata²" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">TS-2</label>
                        <td><input type="text" class="form-control" name="ts3" placeholder="TS-2" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TS-1</label>
                        <td><input type="text" class="form-control" name="ts4" placeholder="TS-1" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">TS</label>
                        <td><input type="text" class="form-control" name="ts5" placeholder="TS" required></td>
                    </div>
                   
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata²</label>
                        <td><input type="text" class="form-control" name="rata3" placeholder="Rata²" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata-Rata Jumlah  Bimbingan di semua Program</label>
                        <td><input type="text" class="form-control" name="program" placeholder="Rata-Rata Jumlah  Bimbingan di semua Program" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata-Rata Banyaknya Pertemuan</label>
                        <td><input type="text" class="form-control" name="pertemuan" placeholder="Rata-Rata Banyaknya Pertemuan" required></td>
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