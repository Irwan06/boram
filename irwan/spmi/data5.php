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
                <h3 class="card-title">Data Tata Pamon, Tata Kelola dan kerja sama</h3><br>
                 
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nomor dan Judul Tabel</th>
                    <th>Nama Sheet</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <tr>
                    <td>1</td>
                    <td>Tabel 2.2.2 Data Kerja Sama - Bidang Pendidikan</td>
                    <td><a href="2.2.2-1.php?id=2.2.2-1"> 2.2.2-1</a></td>
                    
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Tabel 2.2.2 Data Kerja Sama - Bidang Penelitian</td>
                    <td><a href="2.2.2-2.php?id=2.2.2-2">2.2.2-2</a></td>
                    
                  </tr>
                   <tr>
                    <td>3</td>
                    <td>Tabel 2.2.2 Data Kerja Sama - Bidang Pengabdian kepada Masyarakat (PkM)</td>
                    <td><a href="2.2.2-3.php?id=2.2.2-3">2.2.2-3</a></td>
                    
                  </tr>
                   <tr>
                    <td>4</td>
                    <td>Tabel 2.2.2 Data Kerja Sama - Bidang Pengembangan Kelembagaan: SDM, Sarana/Prasarana, Publikasi, HKI, Paten, Teknologi Pembelajaran, dll.</td>
                    <td><a href="2.2.2-4.php?id=2.2.2-4">2.2.2-4</a></td>
                    
                  </tr>

                 
                  </tbody>
                  
                </table>
                 <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                            <i class="fa fa-plus"></i>
                                           Upload Berkas
                                        </button>
                <?php 
                         $no = 0; 
                                  include 'koneksi.php';
                                  $query = "SELECT * FROM `berkas`";
                                  $hasil = mysqli_query($db, $query);
                                  while ($row = mysqli_fetch_assoc($hasil)) {
                            $no++;
                                  ?>
                <a href="cetak.php?file=<?php echo $row['file'] ?>"><?php echo $row['file'] ?></</a>
                 <?php } ?>
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
                <form action="prosesupload.php" method="post" enctype="multipart/form-data">
                    

                    <div class="form-group">
                       
                        <td><input type="hidden" class="form-control" name="judul" value="Data Tata Pamon, Tata Kelola dan kerja sama"  required></td>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nomor dan Judul Tabel</label>
                        <td><input type="file" class="form-control" name="file" placeholder="Nomor dan Judul Tabel" required accept=".pdf"></td>
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