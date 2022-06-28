    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-11">

              <h1 class="m-0"><?= $_GET['halaman'] ?></h1>
            </div>
            <?php
                        if($_SESSION['role']=="A"){
                        ?>
            <div class="col-sm-1">
              <a href="?halaman=tambah_buku" type="button" class="btn btn-primary ">tambah</a>
            </div>
            <?php } ?>
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
                  <h3 class="card-title">Berikut Adalah Data Buku Yang Telah Terdaftar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Buku</th>
                        <th>Nama Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>id Operator</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <?php
                        if($_SESSION['role']=="A"){
                        ?>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php
                        }
                        ?>
                    <tbody>
                      <!-- query menampilkan data -->
                      <?php
                      $no = 1;
                      $sql = mysqli_query($conn, "select * from buku");
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
                          <td><?php if($data['status'] == 'ada'){
                            ?><button class="btn btn-primary" value="ada">ada</button><?php
                          }else{
                              ?><button class="btn btn-danger" value="terpinjam">terpinjam</button><?php
                          }
                          
                          ?></td>
                          <td><?php echo "<img src='img/".$data['gambar']."' style='width:150px; height:80px;'>"?></td>
                          <td>
                            <?php
                          if($_SESSION['role']=="A"){
                          ?>
                            <a href="?halaman=update_buku&id=<?=$data['id_buku'];?>" type="button" class= "btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="controller/proses_buku.php?aksi=delete&id=<?=$data['id_buku'];?>" type="button" class= "btn btn-danger"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;}
                        }
                      ?>
                  </table>
                <div>
              </div>
            </div>
          </div>
        </div>
      </section>