<?php
// Memasukkan konfigurasi database
require "../../config/config.php";

// Query untuk mengambil data peminjaman buku beserta informasi member dan buku yang dipinjam
$dataPeminjam = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.nisn, member.nama, member.kelas, member.jurusan, peminjaman.id_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian 
                               FROM peminjaman 
                               INNER JOIN member ON peminjaman.nisn = member.nisn
                               INNER JOIN buku ON peminjaman.id_buku = buku.id_buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../../css/java.css" rel="stylesheet"> <!-- Memasukkan file CSS lokal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Memasukkan Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script> <!-- Memasukkan Font Awesome -->
  <title>Kelola peminjaman buku || admin</title>
</head>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    /* Mengatur font family */
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
        <h2 class="fw-bold"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <a class="btn btn-outline-dark btn-secondary text-light" href="../dashboardAdmin.php">Menu</a> <!-- Tombol Menu untuk kembali ke dashboard -->
    </div>
  </nav>

  <div class="p-4 mt-5">
    <div class="mt-5">
      <h1 class="text-center fw-bold mt-5">Menu Admin - <span class="text-danger">List of Peminjaman</span></h1> <!-- Judul halaman -->
      <div class="mt-5 alert alert-primary alert-custom text-center" role="alert">List Member yang sudah Meminjam</div> <!-- Alert untuk informasi -->
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover table-custom">
          <thead class="text-center">
            <tr>
              <th>Id Peminjaman</th>
              <th>Id Buku</th>
              <th>Judul Buku</th>
              <th>Nisn Siswa</th>
              <th>Nama siswa</th>
              <th>Kelas</th>
              <th>Jurusan</th>
              <th>Id Admin</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengembalian</th>
            </tr>
          </thead>
          <?php foreach ($dataPeminjam as $item) : ?>
            <tr>
              <td><?= $item["id_peminjaman"]; ?></td>
              <td><?= $item["id_buku"]; ?></td>
              <td><?= $item["judul"]; ?></td>
              <td><?= $item["nisn"]; ?></td>
              <td><?= $item["nama"]; ?></td>
              <td><?= $item["kelas"]; ?></td>
              <td><?= $item["jurusan"]; ?></td>
              <td><?= $item["id_admin"]; ?></td>
              <td><?= $item["tgl_peminjaman"]; ?></td>
              <td><?= $item["tgl_pengembalian"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

  <footer class="fixed-bottom shadow-lg bg-subtle py-3 footer-custom">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p> <!-- Informasi pembuat aplikasi -->
      <p class="mb-0">Universitas Darma Persada</p> <!-- Informasi universitas -->
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script> <!-- Memasukkan script JavaScript lokal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>