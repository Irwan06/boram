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
                <h3 class="card-title">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Keuangan</h3><br>
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
                    <th colspan="5" class="text-center"> Jenis Dana</th>
                     <th rowspan="2">AKSI</th>
                  </tr>
                  <tr>
                      <th>Pendidikan/mahasiswa/tahun</th>
                      <th>Penelitian/dosen/tahun</th>
                      <th>PkM/dosen/tahun</th>
                      <th>Publikasi/dosen/tahun</th>
                      <th>Investasi/tahun</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `upps1`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['pendidikan'] ?></td>
                    <td><?php echo $row['penilitian'] ?></td>
                    <td><?php echo $row['pkm'] ?></td>
                    <td><?php echo $row['publikasi'] ?></td>
                    <td><?php echo $row['inevstasi'] ?></td>
                    <td><a href="edituup.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                      <a href="up1.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
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
                <form action="prosesupps.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="UPPS-2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Akademik</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="Tahun Akademik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan/mahasiswa/tahun</label>
                        <td><input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan/mahasiswa/tahun" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penelitian/dosen/tahun</label>
                        <td><input type="text" class="form-control" name="penilitian" placeholder="Penelitian/dosen/tahun" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PkM/dosen/tahun</label>
                        <td><input type="text" class="form-control" name="pkm" placeholder="PkM/dosen/tahun" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Publikasi/dosen/tahun</label>
                        <td><input type="text" class="form-control" name="publikasi" placeholder="Publikasi/dosen/tahun" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Investasi/tahun</label>
                        <td><input type="text" class="form-control" name="inevstasi" placeholder="Investasi/tahun" required></td>
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