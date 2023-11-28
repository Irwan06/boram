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
                <h3 class="card-title">Tabel 9.1.2.1 IPK Lulusan</h3><br>
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
                    <th rowspan="2">Tahun Lulus</th>
                     <th rowspan="2">Jumlah Lulusan</th>
                    <th colspan="3" class="text-center">Indeks Prestasi Kumulatif (IPK)</th>
                   
                  </tr>
                  <tr>
                      <th>Minimum</th>
                      <th>Rata-Rata</th>
                      <th>Maksimum</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `ipk9`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['lulus'] ?></td>
                    <td><?php echo $row['minimun'] ?></td>
                    <td><?php echo $row['rata'] ?></td>
                    <td><?php echo $row['maksumin'] ?></td>
                    
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
                <form action="proses12.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="9.1.2.1" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Lulus</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="Tahun Lulus" required></td>
                    </div>
                  
                     <div class="form-group">
                        <label for="exampleInputEmail1">Minimum</label>
                        <td><input type="text" class="form-control" name="minimun" placeholder="Minimum" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata-Rata</label>
                        <td><input type="text" class="form-control" name="rata" placeholder="Rata-Rata" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maksimum</label>
                        <td><input type="text" class="form-control" name="maksumin" placeholder="Maksimum" required></td>
                    </div>
                  
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Lulusan</label>
                        <td><input type="text" class="form-control" name="lulus" placeholder="Jumlah Lulusan" required></td>
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