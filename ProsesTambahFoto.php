<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggalunggah = date('Y-m-d H:i:s');
$albumid = 1;
$userid = 1; 


$target_dir = __DIR__ . "/uploads/";


if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}


$file_name = time() . "_" . basename($_FILES["foto"]["name"]);
$target_file = $target_dir . $file_name;
$file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


$allowed_types = ["jpg", "jpeg", "png", "gif"];
if (!in_array($file_type, $allowed_types)) {
    die("Format file tidak didukung.");
}


if (!is_uploaded_file($_FILES["foto"]["tmp_name"])) {
    die("File tidak ditemukan di lokasi sementara.");
}

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    
    $query = "INSERT INTO foto (judul_foto, deskripsi_foto, tanggal_unggah, lokasi_file, albumID, userID) 
          VALUES ('$judul', '$deskripsi', '$tanggalunggah', 'uploads/$file_name', '$albumid', '$userid')";

    if (mysqli_query($koneksi, $query)) {
        echo '<script>alert("Berhasil Mengunggah Foto"); window.location.href = "home.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Gagal mengunggah file.";
}
?>