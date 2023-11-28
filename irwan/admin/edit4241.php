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
$query = "SELECT * FROM`ps` where id ='$id'";
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
    <form action="proses4212.php" method="post" enctype="multipart/form-data">
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
                  <label>Nama Lengkap Dosen Tetap</label>
                <input type="text" class="form-control" name="dosen_t" value="<?php echo $row['dosen_t'] ?>"  placeholder="KETERARANG" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>NIDN/NIDK</label>
                  <input type="text" class="form-control" name="nidn" value="<?php echo $row['nidn'] ?>"  placeholder="KETERARANG" required>
                            
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl" value="<?php echo $row['tgl'] ?>"  placeholder="KETERARANG" required>
                            
                </div>
                <div class="form-group">
                  <label>Pendidikan S1, S2, S3  dan Asal PT </label>
                  <input type="text" class="form-control" name="pt" value="<?php echo $row['pt'] ?>"  placeholder="KETERARANG" required>
                            
                </div>

               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Sertifikat Pendidik</label>
                  <input type="text" class="form-control" name="sertifikat" value="<?php echo $row['sertifikat'] ?>" placeholder="KETERARANG" required>
                </div>
                <div class="form-group">
                  <label>Jabatan Fungsional</label>
                  <input type="text" class="form-control" name="jabatan" value="<?php echo $row['jabatan'] ?>" placeholder="KETERARANG" required>
                </div>
                <div class="form-group">
                  <label>Gelar Akademik</label>
                  <input type="text" class="form-control" name="gelar" value="<?php echo $row['gelar'] ?>" placeholder="KETERARANG" required>
                </div>
                <div class="form-group">
                  <label>Bidang Keahlian Setiap Jenjang Pendidikan</label>
                  <input type="text" class="form-control" name="bidang" value="<?php echo $row['bidang'] ?>" placeholder="KETERARANG" required>
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
