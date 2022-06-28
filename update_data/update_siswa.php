 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-11">

              <h1 class="m-0"><?= $_GET['halaman'] ?></h1>
            </div>
            <div class="col-sm-1">
              <a href="?halaman=data_siswa" type="button" class="btn btn-warning ">Kembali</a>
            </div>

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->



      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Silahkan Ubah data untuk mengupdate data Siswa</h3>
                </div>
                
            <form action="controller/proses_siswa.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Siswa</label>
                    <?php
                        include 'config/koneksi.php';
                        $id = $_GET['id'];
                        $sql = mysqli_query($conn, "select * from siswa where id_siswa='$id'");
                        while($data = mysqli_fetch_array($sql)){
                        ?>
                              <input type="text" value="<?php echo $data['id_siswa'] ?>" class="form-control" id="id_siswa" name="id_siswa" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $data['nama'] ?>" placeholder="Nama Siswa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $data['kelas'] ?>" placeholder="Kelas">
                  </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <?php
                        }
                ?>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" id="update" name="aksi" value="update">
                </div>
              </form>
              </div>
            </div>
           </div>
        </div>
       </section>
