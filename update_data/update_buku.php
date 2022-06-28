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
              <a href="?halaman=data_buku" type="button" class="btn btn-warning ">Kembali</a>
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
                  <h3 class="card-title">Silahkan ubah untuk mengupdate Data Buku</h3>
                </div>
                
            <form action="controller/proses_buku.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Buku</label>
                    <?php
                    include 'config/koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($conn, "select * from buku where id_buku='$id'");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
                              <input type="text" value="<?php echo $data['id_buku'];
                                                       ?>" class="form-control" id="id_buku" name="id_buku" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?php echo $data['nama_buku'] ?>" placeholder="Nama Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $data['penulis'] ?>" placeholder="Penulis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $data['penerbit'] ?>" placeholder="Penerbit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>" placeholder="Tahun Terbit">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Pilih Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<?php echo $data['gambar'] ?>">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                      <?php } ?>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" id="simpan" name="simpan" value="Simpan">
                </div>
              </form>
              </div>
            </div>
           </div>
        </div>
       </section>
