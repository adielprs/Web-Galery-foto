<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

if (isset($_FILES['foto']['name'])) {
    $target_dir = __DIR__ . "/uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $file_name = time() . "_" . basename($_FILES["foto"]["name"]);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ["*"];
    if (!in_array($file_type, $allowed_types)) {
        die("Format file tidak didukung.");
    }
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $query = "SELECT lokasi_file FROM foto WHERE fotoID = '$id'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        unlink($row['lokasi_file']);
        $query = "UPDATE foto SET judul_foto = '$judul', deskripsi_foto = '$deskripsi', lokasi_file = 'uploads/$file_name' WHERE fotoID = '$id'";
        $edit = mysqli_query($koneksi, $query);
        if ($edit) {
            echo '<script>alert("Berhasil Mengedit Foto"); window.location.href = "home.php";</script>';
            exit();
        } else {
            echo '<script>alert("Gagal Mengedit Foto"); window.location.href = "EditFoto.php";</script>';
        }
    } else {
        echo "Gagal mengunggah file.";
    }
} else {
    $query = "UPDATE foto SET judul_foto = '$judul', deskripsi_foto = '$deskripsi' WHERE fotoID = '$id'";
    $edit = mysqli_query($koneksi, $query);
    if ($edit) {
        echo '<script>alert("Berhasil Mengedit Foto"); window.location.href = "home.php";</script>';
        exit();
    } else {
        echo '<script>alert("Gagal Mengedit Foto"); window.location.href = "EditFoto.php";</script>';
    }
}
