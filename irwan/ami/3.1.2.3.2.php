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
                <h3 class="card-title">Tabel 3.1.2.3.2 Calon Mahasiswa Luar Negeri</h3><br>
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
                    <th rowspan="2">Tahun Akademik</th>
                    <th rowspan="2">Jumlah Provinsi</th>
                    <th colspan="2" class="text-center">Jumlah Calon Mahasiswa Reguler Full Time/Part Time</th>
                    <th rowspan="2">Jumlah Total Mahasiswa Reguler</th>
                  </tr>
                  <tr>
                      <th>Laki-laki</th>
                      <th>Perempuan</th>

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `luar_n`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['negeri'] ?></td>
                    <td><?php echo $row['jk_l'] ?></td>
                    <td><?php echo $row['jk_p'] ?></td>
                    <td><?php echo $row['reguler'] ?></td>
                    
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
                <form action="proses3.1.2.3.1.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="3.1.2.3.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">tahun Akademik</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="tahun Akademik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Provinsi</label>
                        <td><input type="text" class="form-control" name="negeri" placeholder="Jumlah Provinsi" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Laki-laki</label>
                        <td><input type="text" class="form-control" name="jk_l" placeholder="Laki-laki" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Perempuan</label>
                        <td><input type="text" class="form-control" name="jk_p" placeholder="Perempuan" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Total Mahasiswa Reguler</label>
                        <td><input type="text" class="form-control" name="reguler" placeholder="Jumlah Total Mahasiswa Reguler" required></td>
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