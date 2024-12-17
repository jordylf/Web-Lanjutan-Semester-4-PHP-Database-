<?php
require "../../config/config.php"; // Memasukkan konfigurasi database

// Ambil data buku berdasarkan id yang diterima dari URL
$review = $_GET["idReview"];
$reviewData = queryReadData("SELECT * FROM buku WHERE id_buku = '$review'")[0];

// Data kategori buku
$kategori = queryReadData("SELECT * FROM kategori_buku");

// Memproses form update saat tombol "Edit" ditekan
if (isset($_POST["update"])) {
  if (updateBuku($_POST) > 0) { // Memanggil fungsi updateBuku() dengan data POST
    // Jika updateBuku() berhasil, tampilkan pesan sukses dan redirect ke halaman Daftar Buku
    echo "<script>
    alert('Data buku berhasil diupdate!');
    document.location.href = 'daftarBuku.php';
    </script>";
  } else {
    // Jika updateBuku() gagal, tampilkan pesan gagal
    echo "<script>
    alert('Data buku gagal diupdate!');
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
  <link href="../../css/java.css" rel="stylesheet"> <!-- Memasukkan file CSS lokal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Memasukkan Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script> <!-- Memasukkan Font Awesome -->
  <title>Edit data buku || Admin</title>
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

  footer {
    background-color: #343a40;
    /* Warna latar footer */
    color: #ffffff;
    /* Warna teks footer */
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
            <a class="nav-link text-warning btn btn-outline-dark" href="daftarBuku.php">Daftar Buku</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container p-3 mt-5">
    <div class="card p-2 mt-5">
      <h1 class="text-center fw-bold p-3">Form Edit buku</h1>
      <form action="" method="post" enctype="multipart/form-data" class="mt-3 p-2">
        <div class="row">
          <div class="col-md-4">
            <label for="formFileMultiple" class="form-label fw-bold">Cover Buku</label>
            <div class="mb-3">
              <img src="../../imgDB/<?= $reviewData["cover"]; ?>" width="100%" height="100%" class="mb-2"> <!-- Menampilkan gambar cover buku -->
              <input class="form-control" type="file" name="cover" id="formFileMultiple"> <!-- Input untuk mengunggah gambar cover baru -->
            </div>
          </div>
          <div class="col-md-8">
            <div class="mb-3">
              <label for="id_buku" class="form-label">ID Buku</label>
              <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= $reviewData["id_buku"]; ?>" readonly> <!-- Menampilkan ID Buku (tidak bisa diubah) -->
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" id="kategori" name="kategori">
                <option selected><?= $reviewData["kategori"]; ?></option> <!-- Menampilkan kategori buku yang sedang diedit -->
                <?php foreach ($kategori as $item) : ?>
                  <option><?= $item["kategori"]; ?></option> <!-- Menampilkan pilihan kategori buku -->
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul" id="judul" value="<?= $reviewData["judul"]; ?>"> <!-- Input judul buku -->
            </div>
            <div class="mb-3">
              <label for="pengarang" class="form-label">Pengarang</label>
              <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?= $reviewData["pengarang"]; ?>"> <!-- Input nama pengarang -->
            </div>
            <div class="mb-3">
              <label for="penerbit" class="form-label">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= $reviewData["penerbit"]; ?>"> <!-- Input nama penerbit -->
            </div>
            <div class="mb-3">
              <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
              <input type="date" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= $reviewData["tahun_terbit"]; ?>"> <!-- Input tahun terbit -->
            </div>
            <div class="mb-3">
              <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
              <input type="number" class="form-control" name="jumlah_halaman" id="jumlah_halaman" value="<?= $reviewData["jumlah_halaman"]; ?>"> <!-- Input jumlah halaman -->
            </div>
            <div class="mb-3">
              <label for="buku_deskripsi" class="form-label">Sinopsis</label>
              <textarea class="form-control" name="buku_deskripsi" id="buku_deskripsi" rows="3"><?= $reviewData["buku_deskripsi"]; ?></textarea> <!-- Input sinopsis buku -->
            </div>
          </div>
        </div>
        <button class="btn btn-success align-items-end" type="submit" name="update">Edit</button> <!-- Tombol untuk menyimpan perubahan -->
        <a class="btn btn-danger align-items-end" href="daftarBuku.php">Batal</a> <!-- Tombol untuk membatalkan edit -->
      </form>
    </div>
  </div>

  <footer class="shadow-lg bg-subtle p-3">
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