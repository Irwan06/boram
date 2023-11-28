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
                <h3 class="card-title">Data SPMI</h3><br>
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
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `spmi`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['nip'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><a href="edit1.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="hapus1.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
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
                <form action="proses1.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">NAMA</label>
                        <td><input type="text" class="form-control" name="nama" placeholder="NAMA" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <td><input type="text" class="form-control" name="nip" placeholder="NIP" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">USERNAME</label>
                        <td><input type="text" class="form-control" name="username" placeholder="USERNAME" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">PASSWORD</label>
                        <td><input type="text" class="form-control" name="password" placeholder="PASSWORD" required></td>
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