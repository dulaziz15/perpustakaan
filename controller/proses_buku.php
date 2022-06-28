<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
include '../config/koneksi.php';

$id_buku = @$_POST['id_buku'];
$nama_buku = @$_POST['nama_buku'];
$penulis = @$_POST['penulis'];
$penerbit = @$_POST['penerbit'];
$tahun_terbit = @$_POST['tahun_terbit'];
$id_operator = @$_POST['id_operator'];
$status = "ada";
$gambar = @$_FILES['gambar']['tmp_name'];
    $target = '../img/';
    $nama_gambar = @$_FILES['gambar']['name'];

    $tambah_buku = @$_POST['tambah'];
    
    if($tambah_buku){
        if($id_buku == "" || $nama_buku == "" || $penulis == "" || $penerbit == "" || $tahun_terbit == "" || $id_operator == "" || $status == "" || $nama_gambar == ""){
            ?><script>alert ("data tidak boleh kosong");</script><?php
            header("location: ../index.php?halaman=tambah_buku");
        } else {
           
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $target_path = $destination_path. $target . basename($_FILES['gambar']['name']);
            $pindah = move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path);

            if($pindah){
                mysqli_query($conn, "insert into buku values ('$id_buku','$nama_buku','$penulis', '$penerbit' ,'$tahun_terbit','$id_operator','$status','$nama_gambar')");
                header("location: ../index.php?halaman=data_buku");
            }else{
                alert("upload gagal");
            }
                
            }
        }

        
    $update = @$_POST['simpan'];
    $query = mysqli_query($conn, "update buku set id_buku='$id_buku',
            nama_buku='$nama_buku',
            penulis='$penulis',
            penerbit='$penerbit',
            tahun_terbit='$tahun_terbit',
            status='$status',
            gambar='$nama_gambar'
            where id_buku='$id_buku'");
    if($update){
        if($id_buku = "" || $nama_buku = "" || $penulis = "" || $penerbit = "" || $tahun_terbit = "" || $id_operator = "" || $status = "" || $gambar = ""){
            ?><script>alert("data tidak boleh kosong");</script><?php
        }else{
             $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $target_path = $destination_path. $target . basename($_FILES['gambar']['name']);
            $pindah = move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path);

            if($pindah){
            header("location: ../index.php?halaman=data_buku");
            }else{
                alert("upload gagal");
            }
    }
    }
    @$aksi = $_POST['aksi'];
    if($aksi == null){
        $aksi = $_GET['aksi'];
    }
    if($aksi == "delete"){
        $id= $_GET['id'];
        $sql = mysqli_query($conn,
        "delete from buku where id_buku = '$id'");
        if($sql){
            header('location: ../index.php?halaman=data_buku');
        }else{
            echo "Kode error: ".mysqli_errno($conn);
            echo "<br />";
            echo "Pesan error: ".mysqli_error($conn);
        }
    }
?>
</body>
</html>