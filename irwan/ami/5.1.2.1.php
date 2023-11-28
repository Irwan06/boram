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
                <h3 class="card-title">Tabel 5.1.2.1  Pemerolehan Dana</h3><br>
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
                <form action="proses5.1.2.1.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="5.1.2.1" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Sumber Dana</label>
                        <td><input type="text" class="form-control" name="dana" placeholder="Sumber Dana" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Dana</label>
                        <td><input type="text" class="form-control" name="j_dana" placeholder="Jenis Dana" required></td>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">TS-2</label>
                        <td><input type="text" class="form-control" name="tes" placeholder="TS-2" required></td>
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
                        <label for="exampleInputEmail1">Rata-Rata</label>
                        <td><input type="text" class="form-control" name="rata" placeholder="Rata-Rata" required></td>
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