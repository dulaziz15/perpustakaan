<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif
 }

 body {
     background: #ecf0f3
 }

 .wrapper {
     max-width: 350px;
     min-height: 500px;
     margin: 80px auto;
     padding: 40px 30px 30px 30px;
     background-color: #ecf0f3;
     border-radius: 15px;
     box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
 }

 .logo {
     width: 80px;
     margin: auto
 }

 .logo img {
     width: 100%;
     height: 80px;
     object-fit: cover;
     border-radius: 50%;
     box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
 }

 .wrapper .name {
     font-weight: 700;
     font-size: 20px;
     letter-spacing: 1.3px;
     padding-left: 10px;
     color: #555
 }

 .wrapper .form-field input {
     width: 100%;
     display: block;
     border: none;
     outline: none;
     background: none;
     font-size: 0.9rem;
     color: #666;
     padding: 10px 15px 10px 10px
 }

 .wrapper .form-field {
     padding-left: 10px;
     margin-bottom: 20px;
     border-radius: 20px;
     box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
 }

 .wrapper .form-field .fas {
     color: #555
 }

 .wrapper .btn {
     box-shadow: none;
     width: 100%;
     height: 40px;
     background-color: #03A9F4;
     color: #fff;
     border-radius: 25px;
     box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
     letter-spacing: 1.3px
 }

 .wrapper .btn:hover {
     background-color: #039BE5
 }

 .wrapper a {
     text-decoration: none;
     font-size: 0.8rem;
     color: #03A9F4
 }

 .wrapper a:hover {
     color: #039BE5
 }

 @media(max-width: 380px) {
     .wrapper {
         margin: 30px 20px;
         padding: 40px 15px 15px 15px
     }
 }
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="logo"> <img src="dist/img/1.png" alt=""> </div>
    <div class="text-center mt-4 name"> Daftar Anggota </div>
    <div class="text-center mt-4 name">PERPUSTAKAAN</div>
    <form class="p-3 mt-3" action="controller/proses_sign_up.php" method="POST">
         <?php
         include 'config/koneksi.php';
                        $sql = mysqli_query($conn, "select max(substr(id_akun,3)) as id from login");
                        
                         while ($data = mysqli_fetch_array($sql)) {
                               $no = (int)$data['id'];
                            $no = $no + 1;
                            $no = "U-" . sprintf("%03s", $no);
                         
        ?>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="hidden" name="id_akun" id="id_akun" value="<?php echo $no;} ?>"> </div> 
        <?php
        $sql = mysqli_query($conn, "select max(substr(id_siswa,3)) as id from siswa");
         while ($data = mysqli_fetch_array($sql)) {
                               $no = (int)$data['id'];
                            $no = $no + 1;
                            $no1 = "S-" . sprintf("%03s", $no);
        ?>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="hidden" name="id_siswa" id="id_siswa" value="<?php echo $no1;} ?>"></div> 
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
         <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
        <input type="text" name="username" id="username" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="password" name="password" id="password" placeholder="Password"> </div> 
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="email" name="email" id="email" placeholder="Email"> </div> 
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
        <input type="text" name="alamat" id="alamat" placeholder="Alamat"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
        <input type="text" name="kelas" id="kelas" placeholder="Kelas"> </div>
        <button class="btn mt-3" name="aksi" value="tambah">Tambah</button>
    </form>
    <div class="text-center fs-6"><a href="login.php">Login</a> </div>
</div>
</body>
</html>
