<?php 
    include "../config/koneksi.php";
    session_start();
    @$aksi = $_POST['aksi'];
    if($aksi == null){
        $aksi = $_GET['aksi'];
    }
    if ($aksi =="login") {
        $email = $_POST['email'];
        $password  = md5($_POST['password']);
        $sql = mysqli_query($conn,"
        select * from login where email='$email' and password='$password'");
        $role = mysqli_query($conn,
        "SELECT SUBSTR(id_akun,1,1) AS id_akun FROM login 
        where email='$email' and password='$password'");
        $validasi = mysqli_num_rows($sql);
        while($data1 = mysqli_fetch_array($sql)){
            $_SESSION['username'] = $data1['username'];
            $_SESSION['id_pengguna'] = $data1['id_pengguna'];
        }
        if ($validasi >= 1) {
            $_SESSION['email']= $email;
            $_SESSION['password'] = $password;
            while($data = mysqli_fetch_array($role)){
                $_SESSION['role'] = $data['id_akun'];
                
            }
            header("location: ../index.php?halaman=dashboard");
        }else{
            header("location: ../login.php");
        }
    }elseif($_GET['aksi']=="logout"){
        session_destroy();
        header("location: ../login.php");
    }
?>