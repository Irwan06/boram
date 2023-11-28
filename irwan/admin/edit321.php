<?php

session_start();
if (empty($_SESSION['user'])) {
  header('Location: ../index.php');
  exit();
}
include 'content/meta.php';
include 'content/navbar.php';
include 'content/sidebar.php';
include 'koneksi.php';
$id = $_GET['id']; 
$query = "SELECT * FROM`reguler` where id ='$id'";
$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($hasil);
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
    <form action="porsesedit321.php" method="post" enctype="multipart/form-data">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tahun Akademik</label>
                <input type="text" class="form-control" name="tahun" value="<?php echo $row['tahun'] ?>"  placeholder="KETERARANG" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Daya Tampung</label>
                  <input type="text" class="form-control" name="tampung" value="<?php echo $row['tampung'] ?>"  placeholder="KETERARANG" required>
                            
                </div>
                <div class="form-group">
                  <label>Pendaftar</label>
                  <input type="text" class="form-control" name="pendaftar" value="<?php echo $row['pendaftar'] ?>"  placeholder="KETERARANG" required>
                            
                </div>

               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Lulus Seleksi</label>
                  <input type="text" class="form-control" name="lulus" value="<?php echo $row['lulus'] ?>" placeholder="KETERARANG" required>
                </div>
                <div class="form-group">
                  <label>Jumlah Mahasiswa Baru Reguler</label>
                  <input type="text" class="form-control" name="baru" value="<?php echo $row['baru'] ?>" placeholder="KETERARANG" required>
                </div>
                <div class="form-group">
                  <label>Jumlah Total Mahasiswa Reguler</label>
                  <input type="text" class="form-control" name="mahas" value="<?php echo $row['mahas'] ?>" placeholder="KETERARANG" required>
                </div>
               
                <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" placeholder="KETERARANG" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <button type="submit" class="btn btn-info" onClick="return confirm('anda yakin simpan data ini ?');"><i
                        class="fa fa-save"> Simpan</i></button>
          </div>
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
