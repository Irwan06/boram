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
                <h3 class="card-title">Tabel 5.2.2.2 Data Sarana Pendidikan</h3><br>
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
                    <th rowspan="2">Jenis Sarana</th>
                    <th rowspan="2">Jumlah Unit</th>
                    <th rowspan="2">Kualitas</th>
                    <th colspan="2" class="text-center">Kondisi</th>
                    <th rowspan="2">Unit Pengelola (PS, UPPS, PT)</th>
                  </tr>
                  <tr>
                      <th>Terawat</th>
                      <th>Tidak Terawat</th>

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `prasarana`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['jenis'] ?></td>
                    <td><?php echo $row['jumla'] ?></td>
                    <td><?php echo $row['kwalitas'] ?></td>
                    <td><?php echo $row['terawat'] ?></td>
                    <td><?php echo $row['t_terawat'] ?></td>
                    <td><?php echo $row['upps'] ?></td>
                    
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
                <form action="proses5.2.2.2.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="5.2.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Sarana</label>
                        <td><input type="text" class="form-control" name="jenis" placeholder="Jenis Sarana" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Unit</label>
                        <td><input type="text" class="form-control" name="jumla" placeholder="Jumlah Unit" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Kualitas</label>
                        <td><input type="text" class="form-control" name="kwalitas" placeholder="Kualitas" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Terawat</label>
                        <td><input type="text" class="form-control" name="terawat" placeholder="Terawat" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Tidak Terawat</label>
                        <td><input type="text" class="form-control" name="t_terawat" placeholder="Tidak Terawat" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit Pengelola (PS, UPPS, PT)</label>
                        <td><input type="text" class="form-control" name="upps" placeholder="Penggunaan (Jam/minggu)" required></td>
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