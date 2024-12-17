<?php
// Mengimpor konfigurasi dan fungsi query
require "../../config/config.php";

// Query untuk mengambil data denda yang lebih dari 0
$dataDenda = queryReadData("SELECT pengembalian.id_pengembalian, pengembalian.id_buku, buku.judul, pengembalian.nisn, member.nama, member.jurusan, admin.nama_admin, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
                           FROM pengembalian
                           INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
                           INNER JOIN member ON pengembalian.nisn = member.nisn
                           INNER JOIN admin ON pengembalian.id_admin = admin.id
                           WHERE pengembalian.denda > 0");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../../css/java.css" rel="stylesheet"> <!-- File CSS lokal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script> <!-- Font Awesome -->
  <title>Kelola denda buku || admin</title>
</head>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    /* Font family untuk halaman */
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
  }

  footer {
    background-color: #343a40;
    /* Warna latar footer */
    color: #ffffff;
    /* Warna teks footer */
  }

  .table-custom {
    background: #ffffff;
    /* Warna latar tabel */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    /* Bayangan untuk efek card */
    border-radius: 8px;
    /* Sudut lengkung untuk card */
    overflow: hidden;
    /* Mengatasi overflow */
  }

  .table-custom th,
  .table-custom td {
    vertical-align: middle;
    /* Aligment vertikal teks di dalam tabel */
    text-align: center;
    /* Aligment teks di dalam tabel */
  }

  .table-custom td {
    padding: 15px;
    /* Padding sel dalam tabel */
  }

  .table-custom .btn-success {
    background: #28a745;
    /* Warna latar tombol sukses */
    border: none;
    /* Menghapus border */
  }

  .alert-custom {
    background: #cce5ff;
    /* Warna latar alert custom */
    border-color: #b8daff;
    /* Warna border alert custom */
    color: #004085;
    /* Warna teks alert custom */
  }

  .footer-custom {
    background-color: #343a40;
    /* Warna latar footer */
    color: #ffffff;
    /* Warna teks footer */
  }
</style>

<body>
  <nav class="navbar fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold text-light"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <a class="btn btn-outline-dark btn-secondary text-light" href="../dashboardAdmin.php">Menu</a> <!-- Tombol Menu untuk kembali ke dashboard -->
    </div>
  </nav>

  <div class="p-4 mt-5">
    <div class="mt-5">
      <h1 class="text-center fw-bold mt-5">Menu Admin - <span class="text-danger">List of Denda</span></h1> <!-- Judul halaman -->
      <div class="mt-5 alert alert-primary alert-custom text-center" role="alert">List Member yang terkena Denda</div> <!-- Alert untuk informasi -->
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover table-custom">
          <thead class="text-center">
            <tr>
              <th>id buku</th>
              <th>Judul buku</th>
              <th>Nisn</th>
              <th>Nama siswa</th>
              <th>Jurusan</th>
              <th>Nama admin</th>
              <th>Hari pengembalian</th>
              <th>Keterlambatan</th>
              <th>Denda</th>
            </tr>
          </thead>
          <?php foreach ($dataDenda as $item) : ?>
            <tr>
              <td><?= $item["id_buku"]; ?></td>
              <td><?= $item["judul"]; ?></td>
              <td><?= $item["nisn"]; ?></td>
              <td><?= $item["nama"]; ?></td>
              <td><?= $item["jurusan"]; ?></td>
              <td><?= $item["nama_admin"]; ?></td>
              <td><?= $item["buku_kembali"]; ?></td>
              <td><?= $item["keterlambatan"]; ?></td>
              <td><?= $item["denda"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

  <footer class="fixed-bottom py-3 mt-5">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p> <!-- Informasi pembuat aplikasi -->
      <p class="mb-0">Universitas Darma Persada</p> <!-- Informasi universitas -->
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script> <!-- File JavaScript lokal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>