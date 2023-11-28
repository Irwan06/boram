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
                <h3 class="card-title">Tabel 2.2.2 Bagian 1 - Kerjasama Bidang Pendidikan</h3><br>
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
                    <th rowspan="2">Nama Lembaga Mitra</th>
                    <th colspan="3" class="text-center">Tingkat</th>
                    <th rowspan="2">Judul dan Ruang Lingkup Kerjasama</th>
                    <th rowspan="2">Manfaat/Output</th>
                    <th rowspan="2">Durasi</th>
                    <th rowspan="2">Bukti/Tautan</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                  <tr>
                      <th>Internasional</th>
                      <th>Nasional</th>
                      <th>Lokal</th>

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `2.2.2-1`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['internasioanl'] ?></td>
                    <td><?php echo $row['nasional'] ?></td>
                    <td><?php echo $row['lokal'] ?></td>
                    <td><?php echo $row['judul'] ?></td>
                    <td><?php echo $row['manfaat'] ?></td>
                    <td><?php echo $row['durasi']?></td>
                    <td><?php echo $row['bukti'] ?></td>
                    <td><a href="edit2.2.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                      <a href="hapus123.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td></td>
                  
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
                <form action="proses2.2.2-1.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="2.2.2-1" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lembaga Mitra</label>
                        <td><input type="text" class="form-control" name="nama" placeholder="Nama Lembaga Mitra" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Internasional</label>
                        <td><input type="text" class="form-control" name="internasioanl" placeholder="Internasional" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nasional</label>
                        <td><input type="text" class="form-control" name="nasional" placeholder="Nasional" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lokal</label>
                        <td><input type="text" class="form-control" name="lokal" placeholder="Lokal" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul dan Ruang Lingkup Kerjasama</label>
                        <td><input type="text" class="form-control" name="judul" placeholder="Judul dan Ruang Lingkup Kerjasama" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Manfaat/Output</label>
                        <td><input type="text" class="form-control" name="manfaat" placeholder="Manfaat/Output" required></td>
                    </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Durasi</label>
                        <td><input type="text" class="form-control" name="durasi" placeholder="Durasi" required></td>
                    </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Bukti/Tautan</label>
                        <td><input type="text" class="form-control" name="bukti" placeholder="Bukti/Tautan" required></td>
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