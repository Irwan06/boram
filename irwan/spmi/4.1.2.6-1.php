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
                <h3 class="card-title">TTabel 4.1.2.6 Kegiatan Mengajar Dosen Tetap</h3><br>
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
                    <th>Nama Lengkap Dosen Tetap</th>
                    <th>Jumlah Kelas</th>
                    <th>Jumlah sks</th>
                    <th>Kode  Mata Kuliah</th>
                    <th>Jabatan Fungsional</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Jumlah Pertemuan yang Direncanakan </th>
                    <th>Jumlah Pertemuan yang Dilaksanakan</th>
                  </tr>
                 
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `tetap`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['kelas'] ?></td>
                    <td><?php echo $row['sks'] ?></td>
                    <td><?php echo $row['kuliah'] ?></td>
                    <td><?php echo $row['matkul'] ?></td>
                    <td><?php echo $row['pertemuan'] ?></td>
                    <td><?php echo $row['j_pertemuan'] ?></td>
                    <td><?php echo $row['dilaksanakan'] ?></td>
                    
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
                <form action="proses4.1.2.6-1.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value=" 4.1.2.6-1" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Dosen Tetap</label>
                        <td><input type="text" class="form-control" name="dosen" placeholder="Nama Lengkap Dosen Tetap" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Kelas</label>
                        <td><input type="text" class="form-control" name="kelas" placeholder="Jumlah Kelas" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah sks</label>
                        <td><input type="text" class="form-control" name="sks" placeholder="Jumlah sks" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan Fungsional</label>
                        <td><input type="text" class="form-control" name="kuliah" placeholder="Jabatan Fungsional" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode  Mata Kuliah</label>
                        <td><input type="text" class="form-control" name="matkul" placeholder="Kode  Mata Kuliah" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mata Kuliah</label>
                        <td><input type="text" class="form-control" name="pertemuan" placeholder="Nama Mata Kuliah" required></td>
                    </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Pertemuan yang Direncanakan</label>
                        <td><input type="text" class="form-control" name="j_pertemuan" placeholder="Jumlah Pertemuan yang Direncanakan" required></td>
                    </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Pertemuan yang Dilaksanakan</label>
                        <td><input type="text" class="form-control" name="dilaksanakan" placeholder="Jumlah Pertemuan yang Dilaksanakan" required></td>
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