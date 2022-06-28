<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            
            <div class="col-sm-1">
              <a href="?halaman=peminjaman" type="button" class="btn btn-warning ">Kembali</a>
            </div>

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      
   <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <?php
                if($_SESSION['role']=="U"){
                ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Siswa</label>
                    <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $_SESSION['id_pengguna'] ?>" readonly>
                  </div>
                <?php
                }
                ?>
                <?php
                if($_SESSION['role']=="A"){
                ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Siswa</label>
                    <input type="text" class="form-control" id="siswa" name="id_siswa">
                  </div>
                <?php
                }
                ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" readonly>
                  </div>
                  
                <!-- /.card-body -->

                <div>
              </div>
              
            </div>
          </div>
          
        </div>
        <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Buku</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penulis Buku</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" readonly>
                  </div>
                <!-- /.card-body -->

                
                <div>
              </div>
            </div>
        </div>
    </div>
</div>
                <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Detail peminjaman</h3>
                </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Mulai</label>
                                            <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">
                                        </div> 
                                        </div> 
                                        <div class="col-md">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Selesai</label>
                                            <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian">
                                        </div>  
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                       <button class="btn btn-primary" name="pinjam" id="pinjam" >Pinjam</button> 
                                    </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
</div>
</div>
</div>
</div>
</div>
                      </section>