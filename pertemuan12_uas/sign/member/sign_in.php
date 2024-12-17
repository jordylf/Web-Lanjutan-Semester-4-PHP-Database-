<?php
session_start(); // Memulai sesi PHP

// Jika member sudah login, redirect ke dashboardMember.php
if (isset($_SESSION["signIn"])) {
  header("Location: ../../DashboardMember/dashboardMember.php");
  exit;
}

require "../../loginSystem/connect.php"; // Mengimpor file koneksi ke database

// Jika tombol signIn diklik
if (isset($_POST["signIn"])) {

  // Mengambil nilai dari form dan melakukan sanitasi
  $nama = strtolower($_POST["nama"]);
  $nisn = $_POST["nisn"];
  $password = $_POST["password"];

  // Query untuk mengambil data member berdasarkan nama dan NISN
  $result = mysqli_query($connect, "SELECT * FROM member WHERE nama = '$nama' AND nisn  = $nisn");

  // Jika ditemukan satu baris data
  if (mysqli_num_rows($result) === 1) {
    // Memeriksa kecocokan password
    $pw = mysqli_fetch_assoc($result);
    if (password_verify($password, $pw["password"])) {
      // SET SESSION jika login berhasil
      $_SESSION["signIn"] = true;
      $_SESSION["member"]["nama"] = $nama;
      $_SESSION["member"]["nisn"] = $nisn;
      $_SESSION["login_success"] = true;
      header("Location: ../../DashboardMember/dashboardMember.php"); // Redirect ke halaman dashboard
      exit;
    }
  }
  $error = true; // Menandai bahwa terjadi error pada login
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
  <link rel="stylesheet" href="../../css/java.css">
  <title>Sign In || Member</title>
  <style>
    body {
      background-image: linear-gradient(135deg, #f45622, #f53e54); /* Gradient background */
      font-family: 'Poppins', sans-serif; /* Font family untuk seluruh halaman */
      margin: 0; /* Menghapus margin */
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* Set ketinggian minimal container */
    }

    .card {
      border-radius: 15px; /* Memutar sudut card */
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan card */
      width: 100%; /* Lebar card */
      max-width: 500px; /* Lebar maksimum card */
      padding: 20px; /* Padding dalam card */
      background: #fff; /* Warna latar belakang card */
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #f53e54; /* Warna border saat fokus */
    }

    .btn-primary {
      background-color: #f53e54; /* Warna latar tombol primary */
      border: none; /* Tanpa border */
    }

    .btn-primary:hover {
      background-color: #f45622; /* Warna latar tombol primary saat hover */
    }

    .btn-secondary {
      background-color: #6c757d; /* Warna latar tombol secondary */
      border: none; /* Tanpa border */
    }

    .text-center img {
      width: 85px; /* Lebar gambar */
    }

    .alert {
      margin-top: 15px; /* Margin atas alert */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="text-center mb-4">
        <img src="../../assets/memberLogo.png" alt="adminLogo"> <!-- Gambar logo di bagian tengah -->
      </div>
      <h1 class="text-center fw-bold mb-4">Sign In (Member)</h1> <!-- Judul sign in -->
      <form action="" method="post" class="needs-validation" novalidate> <!-- Form sign in -->
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span> <!-- Icon user -->
            <input type="text" class="form-control" name="nama" id="nama" required> <!-- Input nama -->
            <div class="invalid-feedback">
              Masukkan nama anda! <!-- Pesan kesalahan input nama -->
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="nisn" class="form-label">Nisn</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span> <!-- Icon hashtag -->
            <input type="number" class="form-control" name="nisn" id="nisn" required> <!-- Input NISN -->
            <div class="invalid-feedback">
              Masukkan Nisn anda! <!-- Pesan kesalahan input NISN -->
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span> <!-- Icon kunci -->
            <input type="password" class="form-control" id="password" name="password" required> <!-- Input password -->
            <div class="invalid-feedback">
              Masukkan Password anda! <!-- Pesan kesalahan input password -->
            </div>
          </div>
        </div>
        <div class="d-grid mb-3">
          <button class="btn btn-primary" type="submit" name="signIn">Masuk</button> <!-- Tombol masuk -->
        </div>
        <div class="d-grid mb-3">
          <a class="btn btn-secondary" href="../../index.php">Batal</a> <!-- Tombol batal -->
        </div>
        <p class="text-center">Belum punya akun? <a href="sign_up.php" class="text-decoration-none text-primary">Sign Up</a></p> <!-- Tautan sign up -->
      </form>
      <?php if (isset($error)) : ?>
        <div class="alert alert-danger" role="alert">Nama / Nisn / Password tidak sesuai!</div> <!-- Alert error login -->
      <?php endif; ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../style\js/script.js"></script>
  <script>
      (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
