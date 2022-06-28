<!-- Content Wrapper. Contains page content -->
    <?php
    if($_SESSION['role']=="A"){
    
    ?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                            <?php
                            $sql = mysqli_query($conn, "select * from buku");
                            $q = mysqli_num_rows($sql);
                            ?>
                                    <h3><?php
                                    echo $q;
                                    ?>
                                    </h3>

                                    <p>Buku</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="?halaman=data_buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <?php
                                $sql = mysqli_query($conn, "select * from siswa");
                                $a = mysqli_num_rows($sql);
                                ?>
                                    <h3><?php
                                     echo $a;
                                     ?>
                                     </h3>
                                     <p>Siswa</p>

                            </div>
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <a href="?halaman=data_siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <?php
                                $sql = mysqli_query($conn, "select * from operator");
                                $o = mysqli_num_rows($sql);
                                ?>
                                    <h3><?php
                                    echo $o;
                                    ?></h3>

                                    <p>Operator</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="?halaman=operator" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                <?php
                                    $data = mysqli_query($conn, "select id_buku from buku");
                                    $sql = mysqli_num_rows($data);
                                    
                                    $data1 = mysqli_query($conn, "select id_peminjaman from peminjaman where status='terpinjam'");
                                    $sql1 = mysqli_num_rows($data1);
                                    $jumlah = ($sql1 / $sql)*100;
                                    echo $jumlah;
                                    echo "%";
                                    ?>
                                    
                                </h3>

                                <p>Buku terpinjam</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
           <?php }else{
               ?>
            <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Peminjaman Siswa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"></a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row" style="text-align:center;">
                    <div class="col-lg-6 col-12">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <p>Jumlah Buku</p>
                            <?php
                            $sql = mysqli_query($conn, "select * from buku");
                            $q = mysqli_num_rows($sql);
                            ?>
                                    <h3><?php
                                    echo $q;
                                    ?>
                                    </h3>

                                    
                            </div>
                            <div class="icon" style="text-align:">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="?halaman=peminjaman" class="small-box-footer">Pinjam Buku <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-12">
                    <div class="small-box bg-info">
                            <div class="inner">
                                <p>Data Buku</p>
                            <?php
                            $sql = mysqli_query($conn, "select * from buku");
                            $q = mysqli_num_rows($sql);
                            ?>
                                    <h3><?php
                                    echo $q;
                                    ?>
                                    </h3>

                                    
                            </div>
                            <div class="icon" style="text-align:">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="?halaman=data_buku" class="small-box-footer">Review Buku<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
           </div>
                    
                </div>
                
                <!-- /.row -->
            </div>
           <?php } ?>