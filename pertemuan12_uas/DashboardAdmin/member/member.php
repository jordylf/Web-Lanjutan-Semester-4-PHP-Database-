<?php
session_start(); // Memulai sesi untuk menyimpan status login

// Redirect ke halaman sign in jika user belum sign in
if (!isset($_SESSION["signIn"])) {
  header("Location: ../../sign/admin/sign_in.php"); // Mengarahkan ke halaman sign in admin jika belum login
  exit;
}

require "../../config/config.php"; // Memasukkan file konfigurasi database
$member = queryReadData("SELECT * FROM member"); // Mengambil data member dari database

// Melakukan pencarian jika tombol search ditekan
if (isset($_POST["search"])) {
  $member = searchMember($_POST["keyword"]); // Memanggil fungsi pencarian dengan keyword yang diinputkan
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
  <title>Member terdaftar</title>
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

    .navbar-brand img {
      width: 120px;
      /* Lebar gambar pada navbar */
    }

    .btn-tertiary {
      background-color: #343a40;
      /* Warna latar tombol */
      color: #ffffff;
      /* Warna teks tombol */
      border: none;
      /* Menghapus border */
    }

    .btn-tertiary:hover {
      background-color: #292e33;
      /* Warna latar saat tombol dihover */
      color: #ffffff;
      /* Warna teks saat tombol dihover */
    }

    .table-custom {
      background: #ffffff;
      /* Warna latar tabel */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      /* Efek bayangan */
      border-radius: 8px;
      /* Radius sudut */
      overflow: hidden;
      /* Mengatur overflow */
    }

    .table-custom th,
    .table-custom td {
      vertical-align: middle;
      /* Posisi teks vertikal di tengah */
      text-align: center;
      /* Posisi teks horizontal di tengah */
    }

    .table-custom td {
      padding: 15px;
      /* Padding sel dalam tabel */
    }

    .footer-custom {
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
</head>

<body>
  <nav class="navbar fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h2 class="fw-bold text-light"><span class="text-danger">Dy</span>Perpus</h2>
      </a>
      <a class="btn btn-outline-dark btn-secondary text-light" href="../dashboardAdmin.php">Menu</a>
    </div>
  </nav>

  <div class="p-4 mt-5">
    <h1 class="text-center fw-bold mt-5">Menu Admin - <span class="text-danger">List of Member</span></h1>
    <div class="mt-5 alert alert-primary alert-custom text-center" role="alert">List Member yang sudah Registrasi</div>
    <form action="" method="post" class="mt-5 d-flex justify-content-center">
      <div class="input-group mb-3 search-box">
        <input class="border p-2 rounded rounded-end-0 bg-tertiary form-control" type="text" name="keyword" id="keyword" placeholder="Cari Data Member...">
        <button class="border border-start-0 bg-light rounded rounded-start-0" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </form>

    <div class="table-responsive mt-3">
      <table class="table table-striped table-hover table-custom">
        <thead class="text-center">
          <tr>
            <th>Nisn</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No Telepon</th>
            <th>Pendaftaran</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($member as $item) : ?>
            <tr>
              <td><?= $item["nisn"]; ?></td>
              <td><?= $item["kode_member"]; ?></td>
              <td><?= $item["nama"]; ?></td>
              <td><?= $item["jenis_kelamin"]; ?></td>
              <td><?= $item["kelas"]; ?></td>
              <td><?= $item["jurusan"]; ?></td>
              <td><?= $item["no_tlp"]; ?></td>
              <td><?= $item["tgl_pendaftaran"]; ?></td>
              <td>
                <div class="action">
                  <a href="deleteMember.php?id=<?= $item["nisn"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data member ?');"><i class="fa-solid fa-trash"></i></a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer class="fixed-bottom shadow-lg bg-subtle py-3 footer-custom">
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