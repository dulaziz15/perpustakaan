        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <?php
              include '../config/koneksi.php';
              $sql = mysqli_query($conn, "select * from siswa where id_siswa");
              while ($data = mysqli_fetch_array($sql)){
              ?>
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Siswa</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Siswa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kelas">
                  </div>
                  
                </div>
                
                <!-- /.card-body -->
                <?php
              }
                ?>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
            <!-- /.card -->      
    </section>