<?php
session_start(); // Memulai sesi PHP untuk pengelolaan sesi pengguna

// Memeriksa apakah pengguna belum masuk, maka redirect ke halaman masuk
if (!isset($_SESSION["signIn"])) {
  header("Location: ../../sign/member/sign_in.php");
  exit; // Menghentikan eksekusi skrip selanjutnya setelah redirect
}

require "../../config/config.php"; // Memasukkan file konfigurasi untuk mengatur koneksi dan fungsi lainnya

$idPeminjaman = $_GET["id"]; // Mendapatkan ID peminjaman dari parameter GET

// Memanggil fungsi queryReadData untuk mengambil data peminjaman berdasarkan ID
$query = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.nisn, member.nama, peminjaman.id_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian
                        FROM peminjaman
                        INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
                        INNER JOIN member ON peminjaman.nisn = member.nisn
                        WHERE peminjaman.id_peminjaman = $idPeminjaman");

// Jika tombol submit "kembalikan" diklik
if (isset($_POST["kembalikan"])) {
  // Memanggil fungsi pengembalian dan mengecek apakah pengembalian berhasil atau tidak
  if (pengembalian($_POST) > 0) {
    // Jika berhasil, tampilkan pesan sukses dan redirect ke halaman transaksi pengembalian
    echo "<script>
          alert('Terimakasih telah mengembalikan buku!');
          window.location.href = 'TransaksiPengembalian.php';
          </script>";
  } else {
    // Jika gagal, tampilkan pesan gagal
    echo "<script>
          alert('Buku gagal dikembalikan');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Form Pengembalian Buku || Member</title>
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
      <a class="btn btn-tertiary btn-outline-dark btn-secondary text-light" href="../dashboardMember.php">Dashboard</a>
    </div>
  </nav>

  <div class="p-4 mt-5">
    <div class="mt-5 card p-3 mb-5 form-custom">
      <form action="" method="post">
        <h3 class="mb-4 fw-bold">Form Pengembalian Buku</h3>
        <?php foreach ($query as $item) : ?>
          <div class="row g-3">
            <div class="col-md-4">
              <label for="id_peminjaman" class="form-label">Id Peminjaman</label>
              <input type="number" class="form-control" name="id_peminjaman" id="id_peminjaman" value="<?= $item["id_peminjaman"]; ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="id_buku" class="form-label">Id Buku</label>
              <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= $item["id_buku"]; ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="judul" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul" id="judul" value="<?= $item["judul"]; ?>" readonly>
            </div>
          </div>

          <div class="row g-3 mt-3">
            <div class="col-md-4">
              <label for="nisn" class="form-label">Nisn Siswa</label>
              <input type="number" class="form-control" name="nisn" id="nisn" value="<?= $item["nisn"]; ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="nama" class="form-label">Nama Siswa</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= $item["nama"]; ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="id_admin" class="form-label">Id Admin Perpustakaan</label>
              <input type="number" class="form-control" name="id_admin" id="id_admin" value="<?= $item["id_admin"]; ?>" readonly>
            </div>
          </div>

          <div class="row g-3 mt-3">
            <div class="col-md-4">
              <label for="tgl_peminjaman" class="form-label">Tanggal Buku Dipinjam</label>
              <input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman" value="<?= $item["tgl_peminjaman"]; ?>" readonly>
            </div>
            <div class="col-md-4">
              <label for="tgl_pengembalian" class="form-label">Tenggat Pengembalian Buku</label>
              <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= $item["tgl_pengembalian"]; ?>" oninput="hitungDenda()" readonly>
            </div>
            <div class="col-md-4">
              <label for="buku_kembali" class="form-label">Hari Pengembalian Buku</label>
              <input type="date" class="form-control" name="buku_kembali" id="buku_kembali" value="<?php echo date('Y-m-d'); ?>" oninput="hitungDenda()">
            </div>
          </div>
        <?php endforeach; ?>

        <div class="row g-3 mt-3">
          <div class="col-md-6">
            <label for="keterlambatan" class="form-label">Keterlambatan</label>
            <input type="text" class="form-control" name="keterlambatan" id="keterlambatan" oninput="hitungDenda()" readonly>
          </div>
          <div class="col-md-6">
            <label for="denda" class="form-label">Denda</label>
            <input type="number" class="form-control" name="denda" id="denda" readonly>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-3 mt-4">
          <a class="btn btn-danger" href="TransaksiPeminjaman.php">Batal</a>
          <button type="submit" class="btn btn-success" name="kembalikan">Kembalikan</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="fixed-bottom shadow-lg footer-custom py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>

  <!--JAVASCRIPT -->
  <script src="../../style/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>