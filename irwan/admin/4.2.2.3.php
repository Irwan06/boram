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
                <h3 class="card-title">Tabel 4.2.2.2 Profil Tendik</h3><br>
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
                    <th>NO</th>
                    <th>Nama Lengkap Tenaga Kependidikan</th>
                    <th>Status Kepegawaian (PNS, Tetap Non-PNS, Kontrak, dll)</th>
                    <th>Bidang Keahlian (administrator, pustakawan, laboran, dll)</th>
                    <th>Pendidikan(SLTA, Diploma, S1, S2, S3) </th>
                    <th>Unit Kerja (PS, UPPS, PT)</th>
                  </tr>
                 
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `profil`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['kependidikan'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['bidang'] ?></td>
                    <td><?php echo $row['pendidikan'] ?></td>
                    <td><?php echo $row['unit'] ?></td>
                    
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
                <form action="proses 4.2.2.2.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value=" 4.2.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Tenaga Kependidikan</label>
                        <td><input type="text" class="form-control" name="kependidikan" placeholder="Nama Lengkap Tenaga Kependidikan" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Kepegawaian (PNS, Tetap Non-PNS, Kontrak, dll)</label>
                        <td><input type="text" class="form-control" name="status" placeholder="Status Kepegawaian (PNS, Tetap Non-PNS, Kontrak, dll)" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bidang Keahlian (administrator, pustakawan, laboran, dll)</label>
                        <td><input type="text" class="form-control" name="bidang" placeholder="Bidang Keahlian (administrator, pustakawan, laboran, dll)" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan(SLTA, Diploma, S1, S2, S3) </label>
                        <td><input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan(SLTA, Diploma, S1, S2, S3) " required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit Kerja (PS, UPPS, PT)</label>
                        <td><input type="text" class="form-control" name="unit" placeholder="Unit Kerja (PS, UPPS, PT)" required></td>
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