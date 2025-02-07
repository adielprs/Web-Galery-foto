<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        echo '<script>alert("Berhasil Login"); window.location.href = "home.php";</script>';
        exit();
    } else {
        echo '<script>alert("Username atau Password salah"); window.location.href = "index.php";</script>';
    }
?>