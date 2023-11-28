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
                <h3 class="card-title">Tabel Data Kuantitatif di Unit Pengelola Program Studi (UPPS) - Data Program Studi</h3><br>
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
                    <th rowspan="2">Jenis Program Studi</th>
                    <th rowspan="2">Nama Program studi</th>
                    <th colspan="4" class="text-center"> Akreditasi Program Studi</th>
                    <th rowspan="2"> Jumlah Mahasiswa Saat TS</th>
                    <th rowspan="2">Jumlah DTPS saat TS</th>
                    <th rowspan="2">Rerata IPK</th>
                    <th rowspan="2">Rerata Masa Studi</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                  <tr>
                      <th>Status/Peringkat</th>
                      <th>Nomor SK</th>
                      <th>Tanggal SK</th>
                      <th>Tanggal.Kadaluarsa</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `visi`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['j_program'] ?></td>
                    <td><?php echo $row['n_program'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['n_sk'] ?></td>
                    <td><?php echo $row['tgl_sk'] ?></td>
                    <td><?php echo $row['t_kad'] ?></td>
                    <td><?php echo $row['j_mahasiswa'] ?></td>
                    <td><?php echo $row['dtps'] ?></td>
                    <td><?php echo $row['ipk'] ?></td>
                    <td><?php echo $row['studi'] ?></td>
                    <td><a href="editupps.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="hapusuppse.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
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
                <form action="prosesdtsp.php" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="UPPS-1" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Program Studi</label>
                        <td><input type="text" class="form-control" name="j_program" placeholder="Jenis Program Studi" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Program studi</label>
                        <td><input type="text" class="form-control" name="n_program" placeholder="Nama Program studi" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Status/Peringkat</label>
                        <td><input type="text" class="form-control" name="status" placeholder="Status/Peringkat" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nomor SK</label>
                        <td><input type="text" class="form-control" name="n_sk" placeholder="Nomor SK" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal SK</label>
                        <td><input type="text" class="form-control" name="tgl_sk" placeholder="Tanggal SK" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal.Kadaluarsa</label>
                        <td><input type="text" class="form-control" name="t_kad" placeholder="Tanggal.Kadaluarsa" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Mahasiswa Saat TS</label>
                        <td><input type="text" class="form-control" name="j_mahasiswa" placeholder="Jumlah Mahasiswa Saat TS" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah DTPS saat TS</label>
                        <td><input type="text" class="form-control" name="dtps" placeholder="Jumlah DTPS saat TS" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Rerata IPK</label>
                        <td><input type="text" class="form-control" name="ipk" placeholder="Rerata IPK" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Rerata Masa Studi</label>
                        <td><input type="text" class="form-control" name="studi" placeholder="Rerata Masa Studi" required></td>
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