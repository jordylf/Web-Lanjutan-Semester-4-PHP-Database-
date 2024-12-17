<?php
require "../../config/config.php"; // Memuat konfigurasi database
$idBuku = $_GET["id"]; // Mengambil ID buku dari parameter GET
$query = queryReadData("SELECT * FROM buku WHERE id_buku = '$idBuku'"); // Query untuk mengambil data buku berdasarkan ID
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../../css/java.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Detail Buku || Member</title>
</head>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
  }

  .navbar {
    background-color: #343a40;
  }

  .navbar-brand h2 {
    color: #ffffff;
  }

  .card {
    width: 24rem;
    margin: 20px;
  }

  .card-body h5 {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .list-group-item {
    font-size: 1rem;
  }

  .btn {
    margin: 5px;
  }

  footer {
    background-color: #343a40;
    color: #ffffff;
  }

  .cover-image {
    max-width: 20%;
    height: auto;
    margin-bottom: 20px;
    justify-content: center;
  }
</style>

<body>
  <nav class="navbar fixed-top navbar-dark shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <a class="btn btn-tertiary btn-outline-dark btn-secondary text-light" href="../dashboardMember.php">Menu</a>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <h2 class="mt-5 text-center fw-bold">Detail Buku</h2>
    <div class="d-flex justify-content-center align-items-center flex-column mt-3">
      <?php foreach ($query as $item) : ?>
        <img src="../../imgDB/<?= $item["cover"]; ?>" class="cover-image" alt="coverBuku">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $item["judul"]; ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Id Buku : <?= $item["id_buku"]; ?></li>
            <li class="list-group-item">Kategori : <?= $item["kategori"]; ?></li>
            <li class="list-group-item">Pengarang : <?= $item["pengarang"]; ?></li>
            <li class="list-group-item">Penerbit : <?= $item["penerbit"]; ?></li>
            <li class="list-group-item">Tahun terbit : <?= $item["tahun_terbit"]; ?></li>
            <li class="list-group-item">Jumlah halaman : <?= $item["jumlah_halaman"]; ?></li>
            <li class="list-group-item">Deskripsi buku : <?= $item["buku_deskripsi"]; ?></li>
          </ul>
          <div class="card-body">
            <a href="daftarBuku.php" class="btn btn-danger">Batal</a>
            <a href="../formPeminjaman/pinjamBuku.php?id=<?= $item["id_buku"]; ?>" class="btn btn-success">Pinjam</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <footer class="shadow-lg bg-subtle py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-primary">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script>
</body>

</html>