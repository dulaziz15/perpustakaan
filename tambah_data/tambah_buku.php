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
                  <h3 class="card-title">Silahkan Isi Untuk Menambah Data Buku</h3>
                </div>
                
            <form action="controller/proses_buku.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <?php
                        $sql = mysqli_query($conn, "select max(substr(id_buku,3)) as id from buku");
                         while ($data = mysqli_fetch_array($sql)) {
                               $no = (int)$data['id'];
                            $no = $no + 1;
                            $no = "B-" . sprintf("%03s", $no); ?>
                              <input type="text" value="<?php echo $no;
                                                      } ?>" class="form-control" id="id_buku" name="id_buku" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" placeholder="Nama Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit">
                  </div>
                <h4>Id Operator</h4>
                <div class="form-group">
                  <select class="custom-select form-control-border" id="id_operator" name="id_operator">
                    <?php
                    $sql = mysqli_query($conn, "select * from operator");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
                    <option><?php echo $data['id_operator']?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Pilih Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" id="tambah" name="tambah" value="Tambah">
                </div>
              </form>
              </div>
            </div>
           </div>
        </div>
       </section>
