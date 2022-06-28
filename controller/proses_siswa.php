<?php
include '../config/koneksi.php';
@$aksi = $_POST['aksi'];
if($aksi == null){
    $aksi = $_GET['aksi'];
}
if($aksi == "tambah"){
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $tambah = $_POST['tambah'];
    $sql = mysqli_query($conn, "insert into siswa values ('$id_siswa','$nama_siswa','$alamat','$kelas')");
    if($sql){
        if($id_siswa == "" || $nama_siswa == "" || $alamat == "" || $kelas == ""){
            ?><script>alert("data tidak boleh kosong");</script><?php
            header("location: ../index.php?halaman=data_siswa");
        }else{
            header("location: ../index.php?halaman=data_siswa");
        }
    }
}else if($aksi == "update"){
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $update = $_POST["aksi"];
    $sql = mysqli_query($conn, "update siswa set id_siswa='$id_siswa',
            nama='$nama_siswa',
            alamat='$alamat',
            kelas='$kelas' where id_siswa='$id_siswa'
            ");
    if($sql){
        header("location: ../index.php?halaman=data_siswa");
    }else{
        
    }
}else if($aksi == "delete"){
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "delete from siswa where id_siswa='$id'");
    if($sql){
        header("location: ../index.php?halaman=data_siswa");
    }
}

?>