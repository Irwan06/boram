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
                <h3 class="card-title">Tabel 4.1.2.5 Beban Kerja Dosen DTPS</h3><br>
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
                    <th colspan="3" class="text-center">sks Pembelajaran pada</th>
                    <th rowspan="2">sks Penelitian</th>
                    <th rowspan="2">sks P2M</th>
                    <th colspan="2" class="text-center">sks Manajemen</th>
                    <th rowspan="2">Jumlah sks Beban Kerja</th>
                  </tr>
                  <tr>
                      <th>PS Sendiri (S1, S2, dan S3)</th>
                      <th>PS Lain di PT Sendiri</th>
                      <th>PT Lain</th>
                       <th>PT Sendiri</th>
                      <th>PT Lain</th>
                  </tr>
                 
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `4.1.2.5`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['ps'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['p_lain'] ?></td>
                    <td><?php echo $row['sks'] ?></td>
                    <td><?php echo $row['p2m'] ?></td>
                    <td><?php echo $row['sendirii'] ?></td>
                    <td><?php echo $row['lain'] ?></td>
                    <td><?php echo $row['beban'] ?></td>
                  
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
                <form action="proses4.1.2.5.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="4.1.2.5" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Dosen Tetap</label>
                        <td><input type="text" class="form-control" name="dosen" placeholder="Nama Lengkap Dosen Tetap" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PS Sendiri (S1, S2, dan S3)</label>
                        <td><input type="text" class="form-control" name="ps" placeholder="PS Sendiri (S1, S2, dan S3)" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PS Lain di PT Sendiri</label>
                        <td><input type="text" class="form-control" name="pt" placeholder="PS Lain di PT Sendiri" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PT Lain</label>
                        <td><input type="text" class="form-control" name="p_lain" placeholder="PT Lain" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">sks Penelitian</label>
                        <td><input type="text" class="form-control" name="sks" placeholder="sks Penelitian" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">sks P2M</label>
                        <td><input type="text" class="form-control" name="p2m" placeholder="sks P2M" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah sks Beban Kerja</label>
                        <td><input type="text" class="form-control" name="sendirii" placeholder="Jumlah sks Beban Kerja" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">PT Sendiri</label>
                        <td><input type="text" class="form-control" name="lain" placeholder="PT Sendiri" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">PT Lain</label>
                        <td><input type="text" class="form-control" name="beban" placeholder="PT Lain" required></td>
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