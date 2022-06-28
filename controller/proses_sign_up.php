<?php
include '../config/koneksi.php';

@$aksi = $_POST['aksi'];
if($aksi == null){
    $aksi = $_GET['aksi'];
}
if($aksi == "tambah"){
$id_akun = $_POST['id_akun'];
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$tambah = "tambah";
$sql = mysqli_query($conn, "insert into login (id_akun,username,password,email,id_pengguna) values ('$id_akun','$username','$password','$email','$id_siswa')");
$sql1 = mysqli_query($conn, "insert into siswa (id_siswa,nama,alamat,kelas) values ('$id_siswa','$nama','$alamat','$kelas')");
if($sql && $sql1){
    if($id_akun == "" || $id_siswa == "" || $nama == "" || $username == "" || $password == "" || $email == "" || $alamat == "" || $kelas == ""){
        ?><script>alert("data tidak boleh kosong");</script><?php
    }else{
        ?><script>alert("selamat anda telah mendaftar");</script><?php
        header("location: ../login.php?aksi=success");
    }
}}

?>