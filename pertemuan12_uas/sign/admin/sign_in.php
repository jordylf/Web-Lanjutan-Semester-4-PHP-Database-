<?php
session_start(); // Memulai sesi PHP

// Jika pengguna sudah sign in, redirect ke dashboard admin
if (isset($_SESSION["signIn"])) {
  header("Location: ../../DashboardAdmin/dashboardAdmin.php");
  exit;
}

require "../../loginSystem/connect.php"; // Menghubungkan ke file connect.php untuk koneksi ke database

// Jika tombol sign in di-submit
if (isset($_POST["signIn"])) {

  $nama = strtolower($_POST["nama_admin"]); // Mengambil nilai nama_admin dari form dan membuat lowercase
  $password = $_POST["password"]; // Mengambil nilai password dari form

  // Query ke database untuk mencari admin dengan nama_admin dan password yang sesuai
  $result = mysqli_query($connect, "SELECT * FROM admin WHERE nama_admin = '$nama' AND password = '$password' ");

  // Jika hasil query menghasilkan satu baris (admin ditemukan)
  if (mysqli_num_rows($result) === 1) {
    // Set session signIn menjadi true
    $_SESSION["signIn"] = true;
    $_SESSION["admin"]["nama_admin"] = $nama; // Set session admin dengan nama_admin yang diambil dari form
    header("Location: ../../DashboardAdmin/dashboardAdmin.php"); // Redirect ke halaman dashboard admin
    exit;
  }
  $error = true; // Jika tidak ditemukan admin, set error menjadi true
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
  <link href="../../css/java.css" rel="stylesheet">
  <link href="../../css/sign_in_admin.css" rel="stylesheet">
  <title>Sign In || Admin</title>
</head>

<body>
  <div class="container">
    <div class="card p-2 mt-5">
      <div class="position-absolute top-0 start-50 translate-middle">
        <img src="../../assets/adminLogo.png" class="" alt="adminLogo" width="85px"> <!-- Logo admin -->
      </div>
      <h1 class="pt-5 text-center fw-bold">Sign In (Admin)</h1> <!-- Judul halaman sign in admin -->
      <hr>
      <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate>
        <label for="validationCustom01" class="form-label">Nama Lengkap</label> <!-- Label input nama_admin -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span> <!-- Ikon user -->
          <input type="text" class="form-control" name="nama_admin" id="validationCustom01" required>
          <div class="invalid-feedback">
            Masukkan Nama anda! <!-- Feedback jika input nama_admin kosong -->
          </div>
        </div>
        <label for="validationCustom02" class="form-label">Password</label> <!-- Label input password -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span> <!-- Ikon kunci -->
          <input type="password" class="form-control" id="validationCustom02" name="password" required>
          <div class="invalid-feedback">
            Masukkan Password anda! <!-- Feedback jika input password kosong -->
          </div>
        </div>
        <button class="btn btn-primary" type="submit" name="signIn">Sign In</button> <!-- Tombol sign in -->
        <a class="btn btn-success" href="../../index.php">Batal</a> <!-- Tombol batal untuk kembali ke halaman utama -->
        <?php if (isset($error)) : ?>
          <div class="alert alert-danger mt-3" role="alert">Nama atau Password Salah!</div> <!-- Alert jika terjadi kesalahan pada proses sign in -->
        <?php endif; ?>
      </form>
    </div>
    <div class="fab-notice">
      <a href="javascript:void(0)">?</a> <!-- Tombol notice -->
    </div>
    <div class="--notice">
      <div class="--notice_container">
        <div class="--notice_header">Hi UNSADA!</div> <!-- Judul notice -->
        <p>Halaman ini dibuat untuk perkuliahan UAS UNSADA <br> Created by Jordy Lian Ferdinand</p> <!-- Deskripsi notice -->
        <div class="--notice_content">
          <h3>Feature:</h3> <!-- Fitur -->
          <ul>
            <li>Validate admin login <span>(halaman lain tidak bisa dibuka jika belum login)</span></li> <!-- Deskripsi fitur validasi login -->
          </ul>
          <h3 style="margin-top: 16px;">Note:</h3> <!-- Catatan -->
          <ul>
            <li>Username & Password : <b>Afri Yudha</b> | <b>123</b> <span>(huruf BESAR & kecil berpengaruh)<br>(Kalau Username huruf awal KAPITAL tidak bisa coba dengan Huruf KECIL)</span>
            </li> <!-- Informasi username dan password -->
          </ul>
        </div>
        <div class="close-notice">
          <a href="javascript:void(0)">Tutup</a> <!-- Tombol untuk menutup notice -->
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menghubungkan dengan jQuery versi 3.6.0 -->
    <script src="../../style\js/script.js"></script> <!-- Menghubungkan dengan script.js -->
</body>

<script>
  let noticeStat = localStorage.getItem('notice'); // Mendapatkan status notice dari local storage

  // Jika noticeStat true, tambahkan kelas hide pada --notice
  if (noticeStat) {
    $('.--notice').addClass('hide');
  }

  // Event click untuk menutup notice
  $('.close-notice a').on('click', function() {
    $('.--notice').addClass('hide');
    localStorage.setItem('notice', 'close'); // Set local storage notice close
  });

  // Event click untuk menampilkan notice
  $('.fab-notice a').on('click', function() {
    $('.--notice').removeClass('hide');
    localStorage.removeItem('notice'); // Hapus local storage notice
  });

  // JavaScript untuk validasi form menggunakan Bootstrap
  (() => {
    'use strict'

    // Ambil semua form yang akan diberi gaya validasi Bootstrap kustom
    const forms = document.querySelectorAll('.needs-validation')

    // Loop form dan cegah submit jika ada input tidak valid
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Menghubungkan dengan Bootstrap bundle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menghubungkan dengan jQuery versi 3.6.0 -->

</html>