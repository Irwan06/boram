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
                <h3 class="card-title">Tabel 9.1.2.6 Tingkat Kepuasan Pengguna Lulusan</h3><br>
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
                    <th rowspan="2">Jenis Kemampuan</th>
                    <th colspan="4" class="text-center">Tingkat Kepuasan Pengguna (%)</th>
                    <th rowspan="2">Rencana Tindak Lanjut oleh PS dan/atau UPPS</th>
                
                   
                  </tr>
                  <tr>
                      <th>Sangat Baik</th>
                      <th>Baik</th>
                      <th>Cukup</th>
                      <th>Kurang</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `masa`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['mahasiswa'] ?></td>
                    <td><?php echo $row['tes'] ?></td>
                    <td><?php echo $row['akhir6'] ?></td>
                    <td><?php echo $row['akhir5'] ?></td>
                    <td><?php echo $row['studi'] ?></td>
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
                <form action="pro9.1.2.6.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="9.1.2.6" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kemampuan</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="Jenis Kemampuan" required></td>
                    </div>
                  
                     <div class="form-group">
                        <label for="exampleInputEmail1">Sangat Baik</label>
                        <td><input type="text" class="form-control" name="akhir6" placeholder="Sangat Baik" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Baik</label>
                        <td><input type="text" class="form-control" name="akhir5" placeholder="Baik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cukup</label>
                        <td><input type="text" class="form-control" name="akhir4" placeholder="Cukup" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kurang</label>
                        <td><input type="text" class="form-control" name="studi" placeholder="Kurang" required></td>
                    </div>
                   
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rencana Tindak Lanjut oleh PS dan/atau UPPS</label>
                        <td><input type="text" class="form-control" name="tes" placeholder="Rencana Tindak Lanjut oleh PS dan/atau UPPS" required></td>
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