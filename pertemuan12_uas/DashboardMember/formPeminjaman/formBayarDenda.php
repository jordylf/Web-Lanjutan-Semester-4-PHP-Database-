<?php
session_start(); // Memulai sesi PHP untuk pengelolaan sesi pengguna

// Memeriksa apakah pengguna belum masuk, maka redirect ke halaman masuk
if (!isset($_SESSION["signIn"])) {
  header("Location: ../../sign/member/sign_in.php");
  exit;
}

require "../../config/config.php"; // Memasukkan file konfigurasi untuk mengatur koneksi dan fungsi lainnya

// Memproses pembayaran denda jika formulir dikirimkan
if (isset($_POST["bayar"])) {
  // Memanggil fungsi bayarDenda dari config.php dan memeriksa apakah pembayaran berhasil
  if (bayarDenda($_POST) > 0) {
    echo "<script>
    alert('Denda berhasil dibayar'); // Menampilkan alert bahwa denda berhasil dibayar
    document.location.href = 'TransaksiDenda.php'; // Redirect ke halaman TransaksiDenda.php
    </script>";
  } else {
    echo "<script>
    alert('Denda gagal dibayar'); // Menampilkan alert bahwa denda gagal dibayar
    </script>";
  }
}

// Mendapatkan id pengembalian dari URL
$dendaSiswa = $_GET["id"];

// Query untuk mendapatkan detail denda berdasarkan id pengembalian
$query = queryReadData("SELECT pengembalian.id_pengembalian, buku.judul, member.nama, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
FROM pengembalian
INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
INNER JOIN member ON pengembalian.nisn = member.nisn
WHERE pengembalian.id_pengembalian = $dendaSiswa");
?>

$dendaSiswa = $_GET["id"];
$query = queryReadData("SELECT pengembalian.id_pengembalian, buku.judul, member.nama, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
FROM pengembalian
INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
INNER JOIN member ON pengembalian.nisn = member.nisn
WHERE pengembalian.id_pengembalian = $dendaSiswa");

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
  <title>Form Bayar Denda || Member</title>
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

    .form-custom {
      background: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      border-radius: 8px;
      padding: 20px;
    }

    .form-custom .form-label {
      font-weight: 500;
    }

    .form-custom .btn {
      width: 200px;
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
    <div class="mt-5 card p-3 mb-5 form-custom">
      <form action="" method="post">
        <h3 class="mb-4 fw-bold">Form Bayar Denda</h3>
        <?php foreach ($query as $item) : ?>
          <input type="hidden" name="id_pengembalian" id="id_pengembalian" value="<?= $item["id_pengembalian"]; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $item["nama"]; ?>" readonly>
          </div>
          <div class="row g-3 mt-4">
            <div class="col-md-6">
              <label for="judul" class="form-label">Buku yang dipinjam</label>
              <input type="text" class="form-control" name="judul" id="judul" value="<?= $item["judul"]; ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="buku_kembali" class="form-label">Tanggal Dikembalikan</label>
              <input type="date" class="form-control" name="buku_kembali" id="buku_kembali" value="<?= $item["buku_kembali"]; ?>" readonly>
            </div>
          </div>
          <div class="row g-3 mt-3">
            <div class="col-md-6">
              <label for="keterlambatan" class="form-label">Keterlambatan</label>
              <input type="text" class="form-control" name="keterlambatan" id="keterlambatan" value="<?= $item["keterlambatan"]; ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="denda" class="form-label">Besar Denda</label>
              <input type="number" class="form-control" name="denda" id="denda" value="<?= $item["denda"]; ?>" readonly>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="mt-4 mb-3">
          <label for="bayarDenda" class="form-label">Jumlah Denda yang Dibayar</label>
          <input type="number" class="form-control" name="bayarDenda" id="bayarDenda" required>
        </div>
        <div class="d-flex justify-content-end gap-3">
          <button type="reset" class="btn btn-warning text-light">Reset</button>
          <button type="submit" class="btn btn-success" name="bayar">Bayar</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="shadow-lg footer-custom py-3">
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