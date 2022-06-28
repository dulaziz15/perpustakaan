<?php
include '../config/koneksi.php';
if(isset($_POST['search_siswa'])){
        $id = $_POST['search_siswa'];
        $sql = mysqli_query($conn, 
        "select * from siswa where id_siswa = '$id'");
        echo json_encode($sql->fetch_row());
    }
    if(isset($_POST['search_buku'])){
        $id = $_POST['search_buku'];
        $sql = mysqli_query($conn, 
        "select * from buku where id_buku = '$id' and status = 'ada'");
        echo json_encode($sql->fetch_row());
    }
    if(isset($_POST['submit'])){
        $id_siswa = $_POST['id_siswa'];
        $id_buku = $_POST['id_buku'];
        $tgl_peminjaman = $_POST['tgl_peminjaman'];
        $tgl_pengembalian = $_POST['tgl_pengembalian'];
        $id_operator = "O-001";
        $status = "terpinjam";
        $sql = mysqli_query($conn, 
        "insert into peminjaman (id_siswa,id_buku,tgl_peminjaman,tgl_pengembalian,id_operator,status) values ('$id_siswa','$id_buku','$tgl_peminjaman','$tgl_pengembalian',
        '$id_operator','$status')");
        $sql2 = mysqli_query($conn, 
        "update buku set status = '$status' where id_buku='$id_buku'");
        if($sql && $sql2){
            return true;
        }else{
            return false;
        }
    }
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "ya"){
            $id_peminjaman = $_POST['id_peminjaman'];
            $id_buku = $_POST['id_buku'];
            $sql = mysqli_query($conn, "update buku set status = 'ada' where id_buku = '$id_buku'");
            $sql2 = mysqli_query($conn, "update peminjaman set status = 'ada' where id_peminjaman = '$id_peminjaman'");
        if($sql && $sql2){
            return true;
        }else{
            return false;
        }
        }}
?>