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
                <h3 class="card-title">TTabel 6.6.2.2 Dosen Tamu dan Tenaga Ahli</h3><br>
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
                    <th >Nama Lengkap Dosen Tamu dan Tenaga Ahli</th>
                    <th >Nama Lembaga</th>
                    <th >Kepakaran</th>
                    <th>Mata Kuliah</th>
                    <th>Waktu Kegiatan</th>
                    <th>Bukti Kegiatan</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `pkm`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['keg'] ?></td>
                    <td><?php echo $row['dosen'] ?></td>
                    <td><?php echo $row['frekuensi'] ?></td>
                    <td><?php echo $row['hasil'] ?></td>
                    <td><?php echo $row['bukti'] ?></td>
                    <td><?php echo $row['bukti1'] ?></td>

                    
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
                <form action="pro.7.2.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="6.6.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Dosen Tamu dan Tenaga Ahli</label>
                        <td><input type="text" class="form-control" name="keg" placeholder="Nama Lengkap Dosen Tamu dan Tenaga Ahli" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lembaga</label>
                        <td><input type="text" class="form-control" name="dosen" placeholder="Nama Lembaga" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Kepakaran</label>
                        <td><input type="text" class="form-control" name="frekuensi" placeholder="Kepakaran" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mata Kuliah</label>
                        <td><input type="text" class="form-control" name="hasil" placeholder="Mata Kuliah" required></td>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Kegiatan</label>
                        <td><input type="text" class="form-control" name="bukti" placeholder="Waktu Kegiatan" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bukti Kegiatan</label>
                        <td><input type="text" class="form-control" name="bukti1" placeholder="Bukti Kegiatan" required></td>
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