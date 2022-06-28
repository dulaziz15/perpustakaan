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
              <a href="?halaman=tambah_peminjaman" type="button" class="btn btn-primary ">tambah</a>
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
                  <h3 class="card-title">Berikut Adalah Laporan Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- query menampilkan data -->
                      <?php
                      $no = 1;
                      $sql = mysqli_query($conn, "SELECT * FROM siswa");
                      while ($data = mysqli_fetch_array($sql)) {

                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['id_siswa'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td><?php echo $data['alamat'] ?></td>
                          <td><?php echo $data['kelas'] ?></td>
                        </tr>
                      <?php
                      $no++;}
                      ?>
                  </table>
                  <br>
                  <br>
                  <div class="card-header">
                  <h2 class="card-title">Berikut Adalah Laporan Data Siswa</h2>
                      </div>
                      <br>
          <!-- Small boxes (Stat box) -->
                <table id="example4" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Buku</th>
                        <th>Nama Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Id Operator</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- query menampilkan data -->
                      <?php
                      $no = 1;
                      $sql = mysqli_query($conn, "SELECT * FROM buku");
                      while ($data = mysqli_fetch_array($sql)) {

                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['id_buku'] ?></td>
                          <td><?php echo $data['nama_buku'] ?></td>
                          <td><?php echo $data['penulis'] ?></td>
                          <td><?php echo $data['penerbit'] ?></td>
                          <td><?php echo $data['tahun_terbit'] ?></td>
                          <td><?php echo $data['id_operator'] ?></td>
                          <td><?php if($data['status']=='ada'){?>
                            <button class="btn btn-success" value=""><?php echo "ada" ?></button>
                            <?php
                            }else{
                             ?><button class="btn btn-danger" value=""><?php echo "terpinjam" ?></button> <?php
                            }
                            ?>
                          </td>
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
                