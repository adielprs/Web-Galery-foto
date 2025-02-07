<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Foto</title>
  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>
<?php

include 'koneksi.php';

$id = $_GET['edit_id'];

$query = "SELECT * FROM foto WHERE fotoID = '$id'";
$edit = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($edit);

?>

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
          <a class="nav-link" href="#" id="dropdownLogout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user" style="color: white; padding-right: 100px;"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLogout">
            <li><a class="dropdown-item" href="Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="text-center">Edit Foto</h1>
    <form action="ProsesEditFoto.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['fotoID']; ?>">
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul_foto']; ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $row['deskripsi_foto']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file" id="foto" name="foto">
        <img src="<?php echo $row['lokasi_file']; ?>" alt="Foto" style="width: 100px;height: 100px;">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

</body>
</html>
