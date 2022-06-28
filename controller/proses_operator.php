<?php
include '../config/koneksi.php';
@$aksi = $_POST['aksi'];
if($aksi == null){
    $aksi = $_GET['aksi'];
}
if($aksi == "tambah"){
    $id_operator = $_POST['id_operator'];
    $nama_operator = $_POST['nama_operator'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $sql = mysqli_query($conn, "insert into operator values ('$id_operator','$nama_operator','$tempat_lahir','$alamat')");
    if($sql){
        header("location: ../index.php?halaman=operator");
    }
}else if($aksi == "update"){
    $id_operator = $_POST['id_operator'];
    $nama_operator = $_POST['nama_operator'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $sql = mysqli_query($conn, "update operator set id_operator='$id_operator',
    nama_operator = '$nama_operator',
    tempat_lahir = '$tempat_lahir',
    alamat = '$alamat' where id_operator='$id_operator'");
    if($sql){
        header("location: ../index.php?halaman=operator");
    }
}else if($aksi == "delete"){
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "delete from operator where id_operator='$id'");
    if($sql){
        header("location: ../index.php?halaman=operator");
    }
}

?>