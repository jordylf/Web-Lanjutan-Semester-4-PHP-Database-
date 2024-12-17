<?php
require "../../config/config.php"; // Memasukkan file konfigurasi database
$buku = queryReadData("SELECT * FROM buku"); // Mengambil data buku dari database

// Mengaktifkan tombol search engine
if (isset($_POST["search"])) {
  // Mengambil input keyword dari form dan mengirimkannya ke fungsi search
  $buku = search($_POST["keyword"]);
}

$kategoriAktif = "semua"; // Kategori aktif default
if (isset($_POST["kategori"])) {
  $kategori = $_POST["kategori"];
  $kategoriAktif = $kategori;
  if ($kategori == "semua") {
    $buku = queryReadData("SELECT * FROM buku"); // Menampilkan semua buku jika kategori dipilih "semua"
  } else {
    $buku = queryReadData("SELECT * FROM buku WHERE kategori = '$kategori'"); // Menampilkan buku berdasarkan kategori yang dipilih
  }
}
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
  <title>Kelola buku || Admin</title>
</head>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
    /* Warna latar belakang */
  }

  .navbar {
    background-color: #343a40;
    /* Warna navbar */
  }

  .navbar-brand h2 {
    color: #ffffff;
    /* Warna teks navbar */
  }

  .layout-card-custom {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    /* Jarak antar card */
  }

  .card {
    width: 20rem;
    /* Lebar card */
    margin-bottom: 1.5rem;
    /* Margin bawah card */
  }

  .card-img-top {
    object-fit: cover;
    /* Gambar memenuhi area */
    width: 100%;
    /* Lebar gambar */
    height: 100%;
    /* Tinggi gambar */
  }

  footer {
    background-color: #343a40;
    /* Warna latar footer */
    color: #ffffff;
    /* Warna teks footer */
  }

  .search-box {
    width: 60%;
    /* Lebar kotak pencarian */
  }
</style>

<body>
  <nav class="navbar fixed-top navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold text-light"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark btn-secondary text-light" aria-current="page" href="../dashboardAdmin.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning btn btn-outline-dark" href="tambahBuku.php">Tambah Buku +</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4 mt-4">
    <h1 class="justify-content-center d-flex gap-2 mt-5 fw-bold">Menu Admin - <span class="text-danger">Daftar Buku</span></h1>
    <div class="d-flex gap-2 mt-5 justify-content-center">
      <form action="" method="post">
        <div class="layout-card-custom">
          <!-- Tombol kategori buku -->
          <button type="submit" name="kategori" value="semua" class="btn btn-outline-dark <?= $kategoriAktif == 'semua' ? 'active' : ''; ?>">Semua</button>
          <button type="submit" name="kategori" value="informatika" class="btn btn-outline-dark <?= $kategoriAktif == 'informatika' ? 'active' : ''; ?>">Informatika</button>
          <button type="submit" name="kategori" value="bisnis" class="btn btn-outline-dark <?= $kategoriAktif == 'bisnis' ? 'active' : ''; ?>">Bisnis</button>
          <button type="submit" name="kategori" value="filsafat" class="btn btn-outline-dark <?= $kategoriAktif == 'filsafat' ? 'active' : ''; ?>">Filsafat</button>
          <button type="submit" name="kategori" value="novel" class="btn btn-outline-dark <?= $kategoriAktif == 'novel' ? 'active' : ''; ?>">Novel</button>
          <button type="submit" name="kategori" value="sains" class="btn btn-outline-dark <?= $kategoriAktif == 'sains' ? 'active' : ''; ?>">Sains</button>
        </div>
      </form>
    </div>
    <!-- Search engine -->
    <form action="" method="post" class="mt-5 d-flex justify-content-center">
      <div class="input-group mb-3 search-box">
        <input class="border p-2 rounded rounded-end-0 bg-tertiary form-control" type="text" name="keyword" id="keyword" placeholder="Cari judul atau kategori buku...">
        <button class="border border-start-0 bg-light rounded rounded-start-0 btn btn-light" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </form>

    <!-- Card buku -->
    <div class="layout-card-custom">
      <?php foreach ($buku as $item) : ?>
        <div class="card">
          <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?= $item["judul"]; ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Kategori : <?= $item["kategori"]; ?></li>
            <li class="list-group-item">Id Buku : <?= $item["id_buku"]; ?></li>
          </ul>
          <div class="card-body">
            <!-- Tombol Edit dan Delete -->
            <a class="btn btn-success" href="updateBuku.php?idReview=<?= $item["id_buku"]; ?>" id="review">Edit</a>
            <a class="btn btn-danger" href="deleteBuku.php?id=<?= $item["id_buku"]; ?>" onclick="return confirm('Yakin ingin menghapus data buku ? ');">Delete</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <footer class="shadow-lg bg-subtle p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>