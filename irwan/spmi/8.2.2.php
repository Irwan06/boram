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
                <h3 class="card-title">Tabel 8.2.2 Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam PkM</h3><br>
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
                    <th >NO</th>
                    <th >Tahun Akademik</th>
                    <th >Judul PkM</th>
                    <th >Nama Ketua Tim</th>
                    <th>Kepakaran Ketua Tim*</th>
                    <th>Nama dan Identitas Dosen Anggota PkM</th>
                    <th>Nama dan Identitas Mahasiswa yang dilibatkan</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `8.2.2`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['ketua'] ?></td>
                    <td><?php echo $row['tim'] ?></td>
                    <td><?php echo $row['anggota'] ?></td>
                    <td><?php echo $row['mahasiswa'] ?></td>
                    <td><?php echo $row['idreee'] ?></td>

                    
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
                <form action="proses11.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="8.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Akademik</label>
                        <td><input type="text" class="form-control" name="judul" placeholder="Tahun Akademik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul PkM</label>
                        <td><input type="text" class="form-control" name="ketua" placeholder="Judul PkM" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ketua Tim</label>
                        <td><input type="text" class="form-control" name="tim" placeholder="Nama Ketua Tim" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kepakaran Ketua Tim*</label>
                        <td><input type="text" class="form-control" name="anggota" placeholder="Kepakaran Ketua Tim*" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama dan Identitas Dosen Anggota PkM</label>
                        <td><input type="text" class="form-control" name="mahasiswa" placeholder="Nama dan Identitas Dosen Anggota PkM" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama dan Identitas Mahasiswa yang dilibatkan</label>
                        <td><input type="text" class="form-control" name="idreee" placeholder="Nama dan Identitas Mahasiswa yang dilibatkan" required></td>
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