<?php
    include 'koneksi.php';


    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email']; 
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO user (username, password, email, nama_lengkap, alamat) VALUES ('$username', '$password', '$email', '$nama_lengkap', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
       echo '<script>alert("Berhasil"); window.location.href = "index.php";</script>';
        exit();
    } else {
        echo '<script>alert("Gagal Gagal i Coba Ulang!!!"); window.location.href = "index.php";</script>';
    }
    
?>