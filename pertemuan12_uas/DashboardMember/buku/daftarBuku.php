<?php
session_start(); // Memulai sesi

if (!isset($_SESSION["signIn"])) { // Memeriksa apakah pengguna belum masuk
  header("Location: ../../sign/member/sign_in.php"); // Redirect ke halaman sign in jika belum masuk
  exit; // Menghentikan eksekusi skrip lebih lanjut
}

require "../../config/config.php"; // Memuat file konfigurasi database

// Mengambil data buku dari database
$buku = queryReadData("SELECT * FROM buku");

// Memproses pencarian buku berdasarkan kata kunci
if (isset($_POST["search"])) {
  $buku = search($_POST["keyword"]);
}

$kategoriAktif = "semua"; // Kategori aktif default
// Memproses pemilihan kategori buku
if (isset($_POST["kategori"])) {
  $kategori = $_POST["kategori"];
  $kategoriAktif = $kategori;
  if ($kategori == "semua") {
    $buku = queryReadData("SELECT * FROM buku"); // Memilih semua buku jika kategori adalah "semua"
  } else {
    $buku = queryReadData("SELECT * FROM buku WHERE kategori = '$kategori'"); // Memilih buku berdasarkan kategori tertentu
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../../css/java.css" rel="stylesheet"> <!-- Memuat file CSS lokal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Daftar Buku || Member</title>
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

    .layout-card-custom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }

    .card {
      width: 20rem;
      margin-bottom: 1.5rem;
    }

    .card-img-top {
      object-fit: cover;
    }

    footer {
      background-color: #343a40;
      color: #ffffff;
    }

    .search-box {
      width: 60%;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <!-- Tombol menu untuk kembali ke dashboard member -->
      <a class="btn btn-tertiary btn-outline-dark btn-secondary text-light" href="../dashboardMember.php">Menu</a>
    </div>
  </nav>

  <div class="p-4 mt-5">
    <!-- Judul halaman -->
    <h1 class="justify-content-center d-flex gap-2 mt-5 fw-bold">Menu - <span class="text-danger">Daftar Buku</span></h1>
    <div class="d-flex gap-2 mt-5 justify-content-center">
      <!-- Form untuk memilih kategori buku -->
      <form action="" method="post">
        <div class="layout-card-custom">
          <button type="submit" name="kategori" value="semua" class="btn btn-outline-dark <?= $kategoriAktif == 'semua' ? 'active' : ''; ?>">Semua</button>
          <button type="submit" name="kategori" value="informatika" class="btn btn-outline-dark <?= $kategoriAktif == 'informatika' ? 'active' : ''; ?>">Informatika</button>
          <button type="submit" name="kategori" value="bisnis" class="btn btn-outline-dark <?= $kategoriAktif == 'bisnis' ? 'active' : ''; ?>">Bisnis</button>
          <button type="submit" name="kategori" value="filsafat" class="btn btn-outline-dark <?= $kategoriAktif == 'filsafat' ? 'active' : ''; ?>">Filsafat</button>
          <button type="submit" name="kategori" value="novel" class="btn btn-outline-dark <?= $kategoriAktif == 'novel' ? 'active' : ''; ?>">Novel</button>
          <button type="submit" name="kategori" value="sains" class="btn btn-outline-dark <?= $kategoriAktif == 'sains' ? 'active' : ''; ?>">Sains</button>
        </div>
      </form>
    </div>

    <!-- Form untuk melakukan pencarian buku -->
    <form action="" method="post" class="mt-5 d-flex justify-content-center">
      <div class="input-group mb-3 search-box">
        <input class="border p-2 rounded rounded-end-0 bg-tertiary form-control" type="text" name="keyword" id="keyword" placeholder="Cari judul atau kategori buku...">
        <button class="border border-start-0 bg-light rounded rounded-start-0 btn btn-light" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </form>

    <!-- Daftar buku yang ditampilkan dalam bentuk kartu -->
    <div class="layout-card-custom">
      <?php foreach ($buku as $item) : ?>
        <div class="card">
          <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku">
          <div class="card-body">
            <h5 class="card-title"><?= $item["judul"]; ?></h5>
            <p class="card-text">Kategori: <?= $item["kategori"]; ?></p>
            <a href="detailBuku.php?id=<?= $item["id_buku"]; ?>" class="btn btn-success">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="shadow-lg bg-subtle py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>

  <!-- Script JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script>
</body>

</html>