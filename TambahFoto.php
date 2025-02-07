 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
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
      </ul>
    </div>
  </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Tambah Foto</h3>
                    </div>
                    <div class="card-body">
                        <form action="ProsesTambahFoto.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div><br>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control-file" id="foto" name="foto" required>
                            </div><br>
                            <!-- <div class="form-group">
                                <label for="foto">Tanggal Unggah</label>
                                <input type="date" class="form-control" id="tanggal_unggah" name="tanggal_unggah" required>
                            </div><br> -->
                            <div class="form-group">
                                <label for="foto">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
 </body>
 </html>