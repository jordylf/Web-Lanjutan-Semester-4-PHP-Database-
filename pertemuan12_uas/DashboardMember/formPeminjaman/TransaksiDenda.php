<?php
session_start(); // Memulai sesi PHP untuk pengelolaan sesi pengguna

// Memeriksa apakah pengguna belum masuk, maka redirect ke halaman masuk
if (!isset($_SESSION["signIn"])) {
  header("Location: ../../sign/member/sign_in.php");
  exit; // Menghentikan eksekusi skrip selanjutnya setelah redirect
}

require "../../config/config.php"; // Memasukkan file konfigurasi untuk mengatur koneksi dan fungsi lainnya
$nisnSiswa = $_SESSION["member"]["nisn"]; // Mendapatkan NISN dari sesi pengguna

// Mengambil data denda dari database untuk pengguna yang sedang masuk
$dataDenda = queryReadData("SELECT pengembalian.id_pengembalian, pengembalian.id_peminjaman, pengembalian.id_buku, buku.judul, pengembalian.nisn, member.nama, admin.nama_admin, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
FROM pengembalian
INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
INNER JOIN member ON pengembalian.nisn = member.nisn
INNER JOIN admin ON pengembalian.id_admin = admin.id
WHERE pengembalian.nisn = $nisnSiswa && pengembalian.denda > 0");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../../css/java.css" rel="stylesheet" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Transaksi Denda Buku || Member</title>
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
    
    footer {
      background-color: #343a40;
      color: #ffffff;
    }
    
    .table-custom {
      background: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      border-radius: 8px;
      overflow: hidden;
    }
    
    .table-custom th,
    .table-custom td {
      vertical-align: middle;
      text-align: center;
    }
    
    .table-custom td {
      padding: 15px;
    }
    
    .table-custom .btn-success {
      background: #28a745;
      border: none;
    }
    
    .alert-custom {
      background: #cce5ff;
      border-color: #b8daff;
      color: #004085;
    }
    
    .footer-custom {
      background-color: #343a40;
      color: #ffffff;
    }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <div class="collapse navbar-collapse justify-content-end">
        </div>
        <a class="btn btn-tertiary btn-outline-dark btn-secondary text-light" href="../dashboardMember.php">Menu</a>
      </div>
    </nav>
    
    <div class="p-4 mt-5">
      <h1 class="text-center fw-bold mt-5">Menu - <span class="text-danger">Denda</span></h1>
      <div class="mt-5 alert alert-primary alert-custom text-center" role="alert">Riwayat transaksi Denda Anda - <span class="fw-bold text-capitalize"><?php echo htmlentities($_SESSION["member"]["nama"]); ?></span></div>
      
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover table-custom">
          <thead>
            <tr>
              <th>Id Buku</th>
              <th>Judul Buku</th>
              <th>Nisn</th>
              <th>Nama Siswa</th>
              <th>Nama Admin</th>
              <th>Hari Pengembalian</th>
              <th>Keterlambatan</th>
              <th>Denda</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataDenda as $item) : ?>
              <tr>
                <td><?= $item["id_buku"]; ?></td>
                <td><?= $item["judul"]; ?></td>
                <td><?= $item["nisn"]; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["nama_admin"]; ?></td>
                <td><?= $item["buku_kembali"]; ?></td>
                <td><?= $item["keterlambatan"]; ?></td>
                <td><?= "Rp. " . $item["denda"]; ?></td>
                <td>
                  <a class="btn btn-success" href="formBayarDenda.php?id=<?= $item["id_pengembalian"]; ?>">Bayar</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
      </table>
    </div>
  </div>

  <footer class="fixed-bottom shadow-lg footer-custom py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script>
</body>

</html>