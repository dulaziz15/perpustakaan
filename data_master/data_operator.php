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
              <a href="?halaman=tambah_operator" type="button" class="btn btn-primary ">tambah</a>
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
                  <h3 class="card-title">Berikut Adalah Data Operator Yang Telah Terdaftar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id operator</th>
                        <th>Nama operator</th>
                        <th>Tempat lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- query menampilkan data -->
                      <?php
                      $no = 1;
                      $sql = mysqli_query($conn, "select * from operator");
                      while ($data = mysqli_fetch_array($sql)) {

                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['id_operator'] ?></td>
                          <td><?php echo $data['nama_operator'] ?></td>
                          <td><?php echo $data['tempat_lahir'] ?></td>
                          <td><?php echo $data['alamat'] ?></td>
                          <td>
                            <a href="?halaman=update_operator&id=<?=$data['id_operator'];?>" type="button" class= "btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="controller/proses_operator.php?aksi=delete&id=<?=$data['id_operator'];?>" type="button" class= "btn btn-danger"><i class="fas fa-trash"></i></a>
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