<?php
session_start();
include 'config/koneksi.php';
if ($_SESSION['email'] && $_SESSION['password']) {
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Perpustakaan| Dashboard</title>
  <?php
  include 'config/koneksi.php';
  ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="dist/sweetalert2.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Al-Mahrusiyah Library</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
        <?php
          echo $_SESSION['username'];
          ?>  
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                <a href="?halaman=dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <?php
            if($_SESSION['role'] == "A"){
            ?>
          <li class="nav-item">
            <a href="?halaman=dashboard" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?halaman=data_buku" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?halaman=data_siswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?halaman=operator" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Operator</p>
                </a>
              </li>
          </li>
            </ul>
          <li class="nav-item">
            <a href="?halaman=laporan" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?halaman=laporan_peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?halaman=laporan_data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data siswa dan Buku</p>
                </a>
              </li>
            </ul>
            <?php
          }
          ?>
            <li class="nav-item">
            <a href="?halaman=dashboard" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Peminjaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?halaman=peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peminjaman</p>
                </a>
              </li>
            </ul>
            <?php
            if($_SESSION['role']=="A"){
            ?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?halaman=pengembalian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengembalian</p>
                </a>
              </li>
            </ul>
            <?php
            }?>
        </li>
        <li class="nav-item">
                <a href="?halaman=edit_profil" class="nav-link">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
        

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php
        @$page = $_GET['halaman'];
        @$action = $_GET['aksi'];
        if($page == 'dashboard' || $page == null){
            include 'dashboard.php';
        }else if($page == 'data_buku'){
          include 'data_master/data_buku.php';
        }else if($page == 'tambah_buku'){
          include 'tambah_data/tambah_buku.php';
        }else if($page == 'update_siswa'){
          include 'update_data/update_siswa.php';
        }else if($page == 'data_siswa'){
          include 'data_master/data_siswa.php';
        }else if($page == 'update_buku'){
          include 'update_data/update_buku.php';
        }else if($page == 'tambah_siswa'){
          include 'tambah_data/tambah_siswa.php';
        }else if($page == 'operator'){
          include 'data_master/data_operator.php';
        }else if($page == 'tambah_operator'){
          include 'tambah_data/tambah_operator.php';
        }else if($page == 'update_operator'){
          include 'update_data/update_operator.php';
        }else if($page == 'peminjaman'){
          include 'peminjaman/peminjaman.php';
        }else if($page == 'pengembalian'){
          include 'peminjaman/pengembalian.php';
        }else if($page == 'tambah_peminjaman'){
          include 'peminjaman/tambah_peminjaman.php';
        }else if($page == 'laporan_peminjaman'){
          include 'peminjaman/laporan_peminjaman.php';
        }else if($page == 'laporan_data'){
          include 'peminjaman/laporan_data.php';
        }else if($page == 'edit_biodata'){
          include 'peminjaman/update_biodata.php';
        }else if($page == 'edit_profil'){
          include 'data_master/edit_profil.php';
        }
        ?>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 || Abdul Aziz || perpustakaan </strong>
  
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="dist/sweetalert2.all.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $("#example4").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
  });
  </script>
  <script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
 $(function(){
        var id = $('#id_siswa').val();
        $.ajax({
          type: 'POST',
          url: 'controller/proses_pemesanan.php',
          data: {
            search_siswa: id
          },
          cache: false,
          success: function(data){

            var dataparse = $.parseJSON(data);
            console.log(dataparse);
            $('#nama_lengkap').val(dataparse[1]);
            $('#alamat').val(dataparse[2]);
            $('#kelas').val(dataparse[3]);
          }
        });
      });
</script>
<script>
  $(document).ready(function(){
      $('#siswa').on('change', function(){
        var id = $(this).val();
        $.ajax({
          type: 'POST',
          url: 'controller/proses_pemesanan.php',
          data: {
            search_siswa: id
          },
          cache: false,
          success: function(data){

            var dataparse = $.parseJSON(data);
            console.log(dataparse);
            $('#nama_lengkap').val(dataparse[1]);
            $('#alamat').val(dataparse[2]);
            $('#kelas').val(dataparse[3]);
          }
           });
      });
       });
</script>
<script>
  $(document).ready(function(){
      $('#id_buku').on('change', function(){
        var id = $(this).val();
        $.ajax({
          type: 'POST',
          url: 'controller/proses_pemesanan.php',
          data: {
            search_buku: id
          },
          cache: false,
          success: function(data){

            var dataparse = $.parseJSON(data);
            console.log(dataparse);
            $('#nama_buku').val(dataparse[1]);
            $('#penulis').val(dataparse[2]);
            $('#penerbit').val(dataparse[3]);
          }
           });
      });
       });
</script>
<script>
    $("#pinjam" ).click(function(){
      var id_siswa = $('#id_siswa').val();
      var id_buku = $('#id_buku').val();
      var tgl_peminjaman = $('#tgl_peminjaman').val();
      var tgl_pengembalian = $('#tgl_pengembalian').val();
      var submit = "submit";
       $.ajax({
          type: 'POST',
          url: 'controller/proses_pemesanan.php',
          data: {
            "id_siswa":id_siswa,
            "id_buku":id_buku,
            "tgl_peminjaman":tgl_peminjaman,
            "tgl_pengembalian":tgl_pengembalian,
            "submit":submit,
          },
          cache: false,
          success: function(data){
            Swal.fire(
                'Selamat!',
                'anda telah meminjam buku',
                'success'
              )
                    }
                  });
              });
  </script>
  <script>
    $('.id_ya').click(function(){
      var row = $(this).closest("tr");
      var id_peminjaman = row.find("#id_peminjaman").val();
      var id_buku = row.find("#id_buku").val();
      var aksi = "ya";
       $.ajax({
          type: 'POST',
          url: 'controller/proses_pemesanan.php',
          data: {
            "id_peminjaman":id_peminjaman,
            "id_buku":id_buku,
            "aksi":aksi
          },
          cache: false,
          success: function(data){
            Swal.fire(
                'Berhasil!',
                'Buku Telah dikembalikan',
                'success'
              );
              location.reload();
                    }
                  });
    });
  </script>
</body>
</html>
<?php
}else{
  header("location: login.php");
}
?>