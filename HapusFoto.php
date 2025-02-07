<?php

include 'koneksi.php';

$id = $_GET['hapus_id'];

$query = "DELETE FROM foto WHERE fotoID = '$id'";
$hapus = mysqli_query($koneksi, $query);

if($hapus){
    echo '<script>alert("Berhasil Menghapus Foto"); window.location.href = "home.php";</script>';
    exit();
}else{
    echo '<script>alert("Gagal Menghapus Foto"); window.location.href = "home.php";</script>';
}
