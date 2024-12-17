<?php
require "../../config/config.php"; // Memasukkan file konfigurasi database

// Mengambil daftar kategori buku dari database
$kategori = queryReadData("SELECT * FROM kategori_buku");

// Menyimpan data buku ke database saat tombol "Tambah" ditekan
if (isset($_POST["tambah"])) {
  if (tambahBuku($_POST) > 0) { // Memanggil fungsi tambahBuku() dengan data POST
    // Jika tambahBuku() berhasil, tampilkan pesan sukses dan redirect ke halaman Daftar Buku
    echo "<script>
    alert('Data buku berhasil ditambahkan');
    document.location.href = 'DaftarBuku.php';
    </script>";
  } else {
    // Jika tambahBuku() gagal, tampilkan pesan gagal
    echo "<script>
    alert('Data buku gagal ditambahkan!');
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
  <link href="../../css/java.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Tambah buku || Admin</title>
</head>
<style>
  .custom-css-form {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa; /* Warna latar belakang */
  }

  .navbar {
    background-color: #343a40; /* Warna navbar */
  }

  .navbar-brand h2 {
    color: #ffffff; /* Warna teks navbar */
  }

  footer {
    background-color: #343a40; /* Warna latar footer */
    color: #ffffff; /* Warna teks footer */
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
      <h1 class="text-center fw-bold p-3">Form Tambah buku</h1>
      <form action="" method="post" enctype="multipart/form-data" class="mt-3 p-2">

        <div class="custom-css-form">
          <!-- Input untuk upload cover buku -->
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Cover Buku</label>
            <input class="form-control" type="file" name="cover" id="formFileMultiple" required>
          </div>

          <!-- Input id buku -->
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Id Buku</label>
            <input type="text" class="form-control" name="id_buku" id="exampleFormControlInput1" placeholder="example inf01" required>
          </div>
        </div>

        <!-- Select kategori buku -->
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
          <select class="form-select" id="inputGroupSelect01" name="kategori" required>
            <option selected>Choose</option>
            <?php foreach ($kategori as $item) : ?>
              <option><?= $item["kategori"]; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Input judul buku -->
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <!-- Input pengarang buku -->
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" id="exampleFormControlInput1" placeholder="nama pengarang" required>
        </div>

        <!-- Input penerbit buku -->
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="exampleFormControlInput1" placeholder="nama penerbit" required>
        </div>

        <!-- Input tahun terbit buku -->
        <label for="validationCustom01" class="form-label">Tahun Terbit</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="date" class="form-control" name="tahun_terbit" id="validationCustom01" required>
        </div>

        <!-- Input jumlah halaman buku -->
        <label for="validationCustom01" class="form-label">Jumlah Halaman</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book-open"></i></span>
          <input type="number" class="form-control" name="jumlah_halaman" id="validationCustom01" required>
        </div>

        <!-- Input sinopsis buku -->
        <div class="form-floating mt-3 mb-3">
          <textarea class="form-control" placeholder="sinopsis tentang buku ini" name="buku_deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Sinopsis</label>
        </div>

        <!-- Tombol submit dan reset -->
        <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
        <input type="reset" class="btn btn-warning text-light" value="Reset">
      </form>
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
