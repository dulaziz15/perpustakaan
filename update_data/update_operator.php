<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-11">

              <h1 class="m-0"><?= $_GET['halaman'] ?></h1>
            </div>
            <div class="col-sm-1">
              <a href="?halaman=operator" type="button" class="btn btn-warning ">Kembali</a>
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
                  <h3 class="card-title">Silahkan Isi Untuk Menambah Data Operator</h3>
                </div>
                
            <form action="controller/proses_operator.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                      <?php
                      include 'config/koneksi.php';
                      $id = $_GET['id'];
                      $sql = mysqli_query($conn, "select * from operator where id_operator='$id'");
                      while($data = mysqli_fetch_array($sql)){
                      ?>
                    <label for="exampleInputEmail1">Id Operator</label>
                              <input type="text" class="form-control" id="id_operator" value="<?php echo $data['id_operator'] ?>" name="id_operator" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Operator</label>
                    <input type="text" class="form-control" id="nama_operator" name="nama_operator" value="<?php echo $data['nama_operator'] ?>" placeholder="Nama Operator">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Alamat">
                  </div>
                </div>
                <?php
                      }
                ?>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" id="update" name="aksi" value="update">
                </div>
              </form>
              </div>
            </div>
           </div>
        </div>
       </section>
