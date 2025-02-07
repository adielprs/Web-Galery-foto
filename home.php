<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Foto</title>
  <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Galery Foto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Kelola</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TampilanFoto.php">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Album</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="dropdownLogout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user" style="color: white; padding-right: 100px;"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLogout">
            <li><a class="dropdown-item" href="Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
          </ul>
        </li>
      </ul>x  
    </div>
  </nav>

  <?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: home.php");
      exit();
  }
  ?>
  <div class="container mt-5">
    <h1 class="text-center mb-5">Daftar Foto</h1>
    <h4>Welcome <?php echo $_SESSION['username']; ?>!</h4>
    <a href="TambahFoto.php" class="btn btn-primary mb-3">+ Tambah Foto</a>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Tanggal Upload</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'koneksi.php';

        $query = "SELECT fotoID,lokasi_file, judul_foto, deskripsi_foto, tanggal_unggah FROM foto ORDER BY tanggal_unggah DESC";
        $result = mysqli_query($koneksi, $query);
        ?>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php $number = isset($number) ? $number : 1; echo htmlspecialchars($number); $number++; ?></td>
            <td><img src="<?php echo $row['lokasi_file']; ?>" alt="Foto" style="height: 100px; width: 100px;"></td>
            <td><?php echo htmlspecialchars($row['judul_foto']); ?></td>
            <td><?php echo htmlspecialchars($row['deskripsi_foto']); ?></td>
            <td><?php echo htmlspecialchars($row['tanggal_unggah']); ?></td>
            <td>
            <a href="EditFoto.php?edit_id=<?= $row['fotoID']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
            <a href="HapusFoto.php?hapus_id=<?= $row['fotoID']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')"><i class="fa-solid fa-trash"></i></i>Hapus</a>
        </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

<style>
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-right: 20px;
    background-color: black;
  }

  .dropdown-menu .dropdown-item {
    color: white !important;
  }

  .dropdown-menu .dropdown-item:hover {
    background-color: black;
    color: white !important;
  }

  th,
  td {
    text-align: center;
  }

  thead {
    background-color: #007bff;
    color: white;
  }

  tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tbody tr:hover {
    background-color: #cce5ff;
  }
</style>