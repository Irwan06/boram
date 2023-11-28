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
                <h3 class="card-title">Data Program Studi</h3><br>
                 <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                            <i class="fa fa-plus"></i>
                                            Tambah Data
                                        </button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                    <th>NO</th>
                    <th>Program Studi (Prodi)</th>
                    <th>Program Pendidikan</th>
                    <th>Nomor SK Izin Prodi</th>
                    <th>Peringkat Akreditasi</th>
                    <th>Tanggal SK</th>
                    <th>Tanggal Daluwarsa</th>
                    <th>Status Daluwarsa</th>
                    <th>Fakultas</th>
                    <th>Ket</th>
                    <th>Sumber</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `prodi`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['prodi'] ?></td>
                    <td><?php echo $row['file'] ?></td>
                    <td><?php echo $row['ket'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['akreditasi'] ?></td>
                    <td><?php echo $row['tgl'] ?></td>
                    <td><?php echo $row['sta'] ?></td>
                    <td><?php echo $row['ft'] ?></td>
                    <td><?php echo $row['ket12'] ?></td>
                    <td><?php echo $row['sumberl'] ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
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
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">KETERARANG</label>
                        <td><input type="text" class="form-control" name="ket" placeholder="KETERARANG" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">STATUS</label>
                        <td><input type="text" class="form-control" name="status" placeholder="STATUS" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">akreditasi</label>
                        <td><input type="text" class="form-control" name="akreditasi" placeholder="akreditasi" required></td>
                    </div>
                     <div class="form-group">
                        <label>PRODI</label>
                        <div class="custom-file">
                            <select class="form-control" name="prodi" required>
                                <option>Silahkan Pilih</option>
                                <option>Pend. Teknik Informatika dan komputer</option>
                                <option >Teknik Informatika dan komputer</option>
                              
                            </select>
                            
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Gambar</label>
                        <td><input type="file" class="form-control" name="file" placeholder="Pilih Gambar" required accept=".jpg,.png"></td>
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