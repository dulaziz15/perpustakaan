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
              <a href="?halaman=dashboard" type="button" class="btn btn-primary ">Kembali</a>
            </div>

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      
   <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Berikut Adalah Data Pengembalian</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example4" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Peminjaman</th>
                        <th>Id Siswa</th>
                        <th>Id Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <!-- <th>Gambar</th> -->
                        <th>Status</th>
                        <th>Kembali</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- query menampilkan data -->
                      <?php
                      $no = 1;
                      $sql = mysqli_query($conn, "SELECT * FROM data_peminjaman,siswa where status='terpinjam'");
                      while ($data = mysqli_fetch_array($sql)) {

                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['id_peminjaman'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td><?php echo $data['id_buku'] ?></td>
                          <td><?php echo $data['tgl_peminjaman'] ?></td>
                          <td><?php echo $data['tgl_pengembalian'] ?></td>
                          <!-- <td><?php echo "<img src='img/".$data['gambar']."' style='width:150px; height:80px;'>"?></td> -->
                          <td><?php if($data['status'] == 'ada'){
                            ?><button class="btn btn-primary" value="ada">ada</button><?php
                          }else{
                              ?><button class="btn btn-danger" value="terpinjam">terpinjam</button><?php
                          }
                          
                          ?></td>
                          <input type="hidden" id="id_peminjaman" value="<?php echo $data['id_peminjaman']?>">
                              <input type="hidden" id="id_buku" value="<?php echo $data['id_buku']?>">
                          <td><button id="ya" class="btn btn-success id_ya"><i class="fas fa-check"></i></button></td>
                        </tr>
                      <?php
                      $no++;}
                      ?>
                  </table>
                <div>
              </div>
            </div>
          </div>
        </div>
      </section>