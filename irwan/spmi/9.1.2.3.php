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
                <h3 class="card-title">Tabel 9.1.2.3 Masa Studi, Kelulusan Tepat Waktu, dan Keberhasilan Studi</h3><br>
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
                    <th rowspan="2">Tahun Masuk</th>
                     <th rowspan="2">Jumlah Mahasiswa Diterima</th>
                    <th colspan="7" class="text-center">Jumlah Mahasiswa yang Lulus pada …</th>
                    <th rowspan="2">Jumlah Lulusan sd Akhir TS</th>
                    <th rowspan="2">Rata-Rata Masa Studi</th>
                   
                  </tr>
                  <tr>
                      <th>Akhir TS-6</th>
                      <th>Akhir TS-5</th>
                      <th>Akhir TS-4</th>
                       <th>Akhir TS-3</th>
                      <th>Akhir TS-2</th>
                      <th>Akhir TS-1</th>
                      <th>Akhir TS</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `masa`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['tahun'] ?></td>
                    <td><?php echo $row['mahasiswa'] ?></td>
                    <td><?php echo $row['akhir6'] ?></td>
                    <td><?php echo $row['akhir5'] ?></td>
                    <td><?php echo $row['akhir4'] ?></td>
                    <td><?php echo $row['akhir3'] ?></td>
                    <td><?php echo $row['akhir2'] ?></td>
                    <td><?php echo $row['akhir1'] ?></td>
                    <td><?php echo $row['akhir'] ?></td>
                    <td><?php echo $row['tes'] ?></td>
                    <td><?php echo $row['studi'] ?></td>
                    
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
                <form action="pro9.1.2.3.php" method="post" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <td><input type="hidden" class="form-control" name="kode" value="9.1.2.3" required></td>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Masuk</label>
                        <td><input type="text" class="form-control" name="tahun" placeholder="Tahun Masuk" required></td>
                    </div>
                  
                     <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-6</label>
                        <td><input type="text" class="form-control" name="akhir6" placeholder="Akhir TS-6" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-5</label>
                        <td><input type="text" class="form-control" name="akhir5" placeholder="Akhir TS-5" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-4</label>
                        <td><input type="text" class="form-control" name="akhir4" placeholder="Akhir TS-4" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-3</label>
                        <td><input type="text" class="form-control" name="akhir3" placeholder="Akhir TS-3" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-2</label>
                        <td><input type="text" class="form-control" name="akhir2" placeholder="Akhir TS-2" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS-1</label>
                        <td><input type="text" class="form-control" name="akhir1" placeholder="Akhir TS-1" required></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Akhir TS</label>
                        <td><input type="text" class="form-control" name="akhir" placeholder="Akhir TS-" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Mahasiswa Diterima</label>
                        <td><input type="text" class="form-control" name="mahasiswa" placeholder="Jumlah Mahasiswa Diterima" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Lulusan sd Akhir TS</label>
                        <td><input type="text" class="form-control" name="tes" placeholder="Jumlah Lulusan sd Akhir TS" required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Rata-Rata Masa Studi</label>
                        <td><input type="text" class="form-control" name="studi" placeholder="Rata-Rata Masa Studi" required></td>
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