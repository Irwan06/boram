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
                <h3 class="card-title">Tabel 3.2.2 Program layanan dan pembinaan minat, bakat, penalaran, kesejahteraan, dan keprofesian mahasiswa</h3><br>
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
                    <th>Tahun Akademik</th>
                    <th>Jenis Program Layanan dan  Pembinaan Minat</th>
                    <th>Jenis Program Layanan dan Pembinaan Bakat</th>
                    <th>Jenis Program Layanan dan Pembinaan Penalaran</th>
                    <th>Jenis Program Layanan dan Pembinaan Kesejahteraan</th>
                    <th>Jenis Program Layanan dan Pembinaan Keprofesian</th>
                    <th>Aksi</th>
                  </tr>
                 
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `layanan`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['minat'] ?></td>
                    <td><?php echo $row['bakat'] ?></td>
                    <td><?php echo $row['penelaran'] ?></td>
                    <td><?php echo $row['pembinaan'] ?></td>
                    <td><?php echo $row['keporfesian'] ?></td>
                    <td><a href="edit311.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="hapus3221.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
                    
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
                <form action="proses3.2.2.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="3.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Akademik</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="tahun Akademik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Layanan dan  Pembinaan Minat</label>
                        <td><input type="text" class="form-control" name="minat" placeholder="Jenis Program Layanan dan  Pembinaan Minat" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Layanan dan Pembinaan Bakat</label>
                        <td><input type="text" class="form-control" name="bakat" placeholder="Jenis Program Layanan dan Pembinaan Bakat" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Layanan dan Pembinaan Kesejahteraan</label>
                        <td><input type="text" class="form-control" name="penelaran" placeholder="Jenis Program Layanan dan Pembinaan Kesejahteraan" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Layanan dan Pembinaan Penalaran</label>
                        <td><input type="text" class="form-control" name="pembinaan" placeholder="Jenis Program Layanan dan Pembinaan Penalaran" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Layanan dan Pembinaan Keprofesian</label>
                        <td><input type="text" class="form-control" name="keporfesian" placeholder="Jenis Program Layanan dan Pembinaan Keprofesian" required></td>
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