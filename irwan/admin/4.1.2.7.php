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
                <h3 class="card-title">Tabel 4.1.2.7 Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi</h3><br>
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
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Nama Lengkap Dosen Tetap</th>
                    <th colspan="5" class="text-center">Jumlah Mahasiswa Bimbingan</th>
                  </tr>
                  <tr>
                      <th>TS-2</th>
                      <th>TS-1</th>
                      <th>TS</th>
                      <th>Jumlah</th>
                      <th>Rata-Rata/Tahun</th>

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `Tugas`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['tes'] ?></td>
                    <td><?php echo $row['tes1'] ?></td>
                    <td><?php echo $row['tes2'] ?></td>
                    <td><?php echo $row['jumlah'] ?></td>
                    <td><?php echo $row['rata2'] ?></td>
                    
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
                <form action="proses123.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="3.1.2.3.1" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Dosen Tetap</label>
                        <td><input type="text" class="form-control" name="dosen" placeholder="Nama Lengkap Dosen Tetap" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">JTS-2</label>
                        <td><input type="text" class="form-control" name="tes" placeholder="JTS-2" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TS-1</label>
                        <td><input type="text" class="form-control" name="tes1" placeholder="TS-1" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TS</label>
                        <td><input type="text" class="form-control" name="tes2" placeholder="TS" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <td><input type="text" class="form-control" name="jumlah" placeholder="Jumlah" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata-Rata/Tahun</label>
                        <td><input type="text" class="form-control" name="rata2" placeholder="Rata-Rata/Tahun" required></td>
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