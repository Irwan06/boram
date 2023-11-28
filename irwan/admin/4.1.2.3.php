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
                <h3 class="card-title">Tabel 4.1.2.3 DT yang Bidang Keahliannya di Luar Bidang PS</h3><br>
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
                    <th>NIDN/NIDK</th>
                    <th>Tanggal Lahir</th>
                    <th>Sertifikat Pendidik</th>
                    <th>Jabatan Fungsional</th>
                    <th>Gelar Akademik</th>
                    <th>Pendidikan S1, S2, S3  dan Asal PT </th>
                    <th>Bidang Keahlian Setiap Jenjang Pendidikan</th>
                    <th>Aksi</th>
                  </tr>
                 
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `ps`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['dosen_t'] ?></td>
                    <td><?php echo $row['nidn'] ?></td>
                    <td><?php echo $row['tgl'] ?></td>
                    <td><?php echo $row['sertifikat'] ?></td>
                    <td><?php echo $row['jabatan'] ?></td>
                    <td><?php echo $row['gelar'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['bidang'] ?></td>
                    <td><a href="edit4241.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="hapus4222.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger">Hapus</a></td>
                    
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
                <form action="proses7.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value=" 4.1.2.3" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Dosen Tetap</label>
                        <td><input type="text" class="form-control" name="dosen_t" placeholder="Nama Lengkap Dosen Tetap" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIDN/NIDK</label>
                        <td><input type="text" class="form-control" name="nidn" placeholder="NIDN/NIDK" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <td><input type="text" class="form-control" name="tgl" placeholder="Tanggal Lahir" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan Fungsional</label>
                        <td><input type="text" class="form-control" name="sertifikat" placeholder="Jabatan Fungsional" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sertifikat Pendidik</label>
                        <td><input type="text" class="form-control" name="jabatan" placeholder="Sertifikat Pendidik" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gelar Akademik</label>
                        <td><input type="text" class="form-control" name="gelar" placeholder="Gelar Akademik" required></td>
                    </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan S1, S2, S3  dan Asal PT</label>
                        <td><input type="text" class="form-control" name="pt" placeholder="Pendidikan S1, S2, S3  dan Asal PT" required></td>
                    </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Bidang Keahlian Setiap Jenjang Pendidikan</label>
                        <td><input type="text" class="form-control" name="bidang" placeholder="Bidang Keahlian Setiap Jenjang Pendidikan" required></td>
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