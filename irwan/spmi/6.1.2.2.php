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
                <h3 class="card-title">Tabel 6.1.2.2 Mata Kuliah, CPL, dan Perangkat Pembelajaran</h3><br>
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
                    <th rowspan="2">Semester</th>
                    <th rowspan="2">Kode MK</th>
                    <th rowspan="2">Nama Mata Kuliah</th>
                    <th colspan="3" class="text-center">Jenis Mata Kuliah</th>
                    <th rowspan="2">Jenis Mata Kuliah</th>
                    <th colspan="3" class="text-center">Unit Penyelenggara*</th>
                    <th rowspan="2">Kesesuaian dengan CPL</th>
                    <th rowspan="2">Perangkat Pembelajaran</th>
                  </tr>
                  <tr>
                      <th>Teori</th>
                      <th>Praktikum</th>
                      <th>Praktik</th>
                      <th>PT</th>
                      <th>UPPS</th>
                      <th>PS</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `cpl`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['semester'] ?></td>
                    <td><?php echo $row['mk'] ?></td>
                    <td><?php echo $row['n_mk'] ?></td>
                    <td><?php echo $row['teori'] ?></td>
                    <td><?php echo $row['praktikum'] ?></td>
                    <td><?php echo $row['praktik'] ?></td>
                    <td><?php echo $row['sks'] ?></td>
                    <td><?php echo $row['pt'] ?></td>
                    <td><?php echo $row['upps'] ?></td>
                    <td><?php echo $row['ps'] ?></td>
                    <td><?php echo $row['sesuaian'] ?></td>
                    <td><?php echo $row['perangkat'] ?></td>
                    
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
                <form action="proses9.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="6.1.2.2" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Semester</label>
                        <td><input type="text" class="form-control" name="semester" placeholder="Semester" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode MK</label>
                        <td><input type="text" class="form-control" name="mk" placeholder="Kode MK" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mata Kuliah</label>
                        <td><input type="text" class="form-control" name="n_mk" placeholder="Nama Mata Kuliah" required></td>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Teori</label>
                        <td><input type="text" class="form-control" name="teori" placeholder="Teori" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Praktikum</label>
                        <td><input type="text" class="form-control" name="praktikum" placeholder="Praktikum" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Praktik</label>
                        <td><input type="text" class="form-control" name="praktik" placeholder="Praktik" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Mata Kuliah</label>
                        <td><input type="text" class="form-control" name="sks" placeholder="Jenis Mata Kuliah" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">PT</label>
                        <td><input type="text" class="form-control" name="pt" placeholder="PT" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">UPPS</label>
                        <td><input type="text" class="form-control" name="upps" placeholder="UPPS" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">PS</label>
                        <td><input type="text" class="form-control" name="ps" placeholder="PS" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Kesesuaian dengan CPL</label>
                        <td><input type="text" class="form-control" name="sesuaian" placeholder="Kesesuaian dengan CPL" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Perangkat Pembelajaran</label>
                        <td><input type="text" class="form-control" name="perangkat" placeholder="Perangkat Pembelajaran" required></td>
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