<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilan Foto</title>
  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Galery Foto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Kelola</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TampilanFoto.php">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Toko.php">Album</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownLogout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user" style="color: white; padding-right: 10px;"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLogout">
            <li><a class="dropdown-item" href="Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <?php
  require 'koneksi.php';

  $query = "SELECT lokasi_file FROM foto ORDER BY tanggal_unggah DESC";
  $result = mysqli_query($koneksi, $query);
  ?>

  <h2 style="text-align: center; padding-top: 20px;">Galeri Foto</h2>

  <div class="container">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="card">
        <img src="<?php echo $row['lokasi_file']; ?>" alt="Foto">
        <div class="card-body">
          <div>
            <div class="row">
              <div class="col-md-6">
                <a href="" class="btn btn-primary">Like</a>
              </div>
              <div class="col-md-6">
                <a href="" class="btn btn-primary">Comment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- <script script="asset/bootstrap/js/bootstrap.min.js"></script> -->\
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!-- <?php echo $row['lokasi_file']; ?>  ?> -->
<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
  }

  .card {
    width: 200px;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .card img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
  }

  .card-body {
    padding: 10px;
    text-align: center;
  }

  .card-body h5 {
    font-size: 16px;
    margin: 10px 0 5px 0;
  }
</style>