<?php
require "../../loginSystem/connect.php"; // Memasukkan file koneksi ke database

if (isset($_POST["signUp"])) { // Memeriksa apakah tombol signUp telah diklik

  // Memanggil fungsi signUp dengan parameter dari $_POST
  if (signUp($_POST) > 0) { // Jika registrasi berhasil
    echo "<script>
    alert('Sign Up berhasil!');
    window.location.href = 'sign_in.php'; // Redirect ke halaman sign_in.php
    </script>"; // Menampilkan pesan alert berhasil dan redirect
    exit; // Keluar dari skrip PHP
  } else {
    echo "<script>
    alert('Sign Up gagal!');
    window.location.href = 'sign_up.php'; // Redirect ke halaman sign_up.php
    </script>"; // Menampilkan pesan alert gagal jika registrasi tidak berhasil
  }
  exit; // Keluar dari skrip PHP
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
  <title>Sign Up || Member</title>
  <style>
    body {
      background-image: linear-gradient(135deg, #f45622, #f53e54);
      /* Gradient background */
      font-family: 'Poppins', sans-serif;
      /* Font family */
      margin: 0;
      /* Menghapus margin */
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 150vh;
      /* Ketinggian minimal container */
    }

    .card {
      border-radius: 15px;
      /* Memutar sudut card */
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      /* Bayangan card */
      width: 100%;
      /* Lebar card */
      max-width: 600px;
      /* Lebar maksimum card */
      padding: 20px;
      /* Padding dalam card */
      background: #fff;
      /* Warna latar belakang card */
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #f53e54;
      /* Warna border saat fokus */
    }

    .btn-primary {
      background-color: #f53e54;
      /* Warna latar tombol primary */
      border: none;
      /* Tanpa border */
    }

    .btn-primary:hover {
      background-color: #f45622;
      /* Warna latar tombol primary saat hover */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card p-2 mt-5">
      <div class="position-absolute top-0 start-50 translate-middle">
        <img src="../../assets/memberLogo.png" alt="adminLogo" width="85px"> <!-- Gambar logo di bagian atas -->
      </div>
      <h1 class="pt-5 text-center fw-bold">Sign Up (Member)</h1> <!-- Judul sign up -->
      <hr> <!-- Garis pemisah -->
      <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate> <!-- Form sign up -->

        <label for="validationCustom01" class="form-label">Nisn</label> <!-- Label NISN -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-hashtag"></i></span> <!-- Icon hashtag -->
          <input type="number" class="form-control" name="nisn" id="validationCustom01" required> <!-- Input NISN -->
          <div class="invalid-feedback">
            Nisn wajib diisi! <!-- Pesan kesalahan input NISN -->
          </div>
        </div>
        <label for="validationCustom01" class="form-label">Kode Member</label> <!-- Label Kode Member -->
        <div class="input-group mt-0">
          <input type="text" class="form-control" name="kode_member" id="validationCustom01" required> <!-- Input Kode Member -->
          <div class="invalid-feedback">
            Kode member wajib diisi! <!-- Pesan kesalahan input Kode Member -->
          </div>
        </div>
        <label for="validationCustom02" class="form-label">Nama Lengkap</label> <!-- Label Nama Lengkap -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span> <!-- Icon user -->
          <input type="text" class="form-control" id="validationCustom02" name="nama" required> <!-- Input Nama Lengkap -->
          <div class="invalid-feedback">
            Nama wajib diisi! <!-- Pesan kesalahan input Nama Lengkap -->
          </div>
        </div>
        <label for="validationCustom02" class="form-label">Password</label> <!-- Label Password -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span> <!-- Icon kunci -->
          <input type="password" class="form-control" id="validationCustom02" name="password" required> <!-- Input Password -->
          <div class="invalid-feedback">
            Password wajib diisi! <!-- Pesan kesalahan input Password -->
          </div>
        </div>
        <label for="validationCustom02" class="form-label">Konfirmasi Password</label> <!-- Label Konfirmasi Password -->
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span> <!-- Icon kunci -->
          <input type="password" class="form-control" id="validationCustom02" name="confirmPw" required> <!-- Input Konfirmasi Password -->
          <div class="invalid-feedback">
            Konfirmasi password wajib diisi! <!-- Pesan kesalahan input Konfirmasi Password -->
          </div>
        </div>

        <!-- Dropdown untuk memilih Gender -->
        <div class="col input-group mb-2">
          <label class="input-group-text" for="inputGroupSelect01">Gender</label>
          <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin">
            <option selected>Pilih</option>
            <option value="Laki laki">Laki laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <!-- Dropdown untuk memilih Kelas -->
        <div class="col input-group mb-2">
          <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
          <select class="form-select" id="inputGroupSelect01" name="kelas">
            <option selected>Pilih</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
            <option value="XIII">XIII</option>
          </select>
        </div>

        <!-- Dropdown untuk memilih Jurusan -->
        <div class="input-group mb-2">
          <label class="input-group-text" for="inputGroupSelect01">Jurusan</label>
          <select class="form-select" id="inputGroupSelect01" name="jurusan">
            <option selected>Pilih</option>
            <option value="Desain Gambar Mesin">Desain Gambar Mesin</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
            <option value="Teknik Otomotif">Teknik Otomotif</option>
            <option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
            <option value="Teknik Konstruksi Perumahan">Teknik Konstruksi Perumahan</option>
            <option value="Teknik Tenaga Listrik">Teknik Tenaga Listrik</option>
            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi TenagaListrik</option>
            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            <option value="Sistem Informatika Jaringan dan Aplikasi">Sistem Informatika Jaringan dan Aplikasi</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
          </select>
          <!-- Penutup dropdown untuk memilih Jurusan -->
        </div>

        <!-- Input untuk No Telepon -->
        <label for="validationCustom01" class="form-label">No Telepon</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span> <!-- Icon telepon -->
          <input type="number" class="form-control" name="no_tlp" id="validationCustom01" required> <!-- Input No Telepon -->
          <div class="invalid-feedback">
            No telepon wajib diisi! <!-- Pesan kesalahan input No Telepon -->
          </div>
        </div>

        <!-- Input untuk Tanggal Pendaftaran -->
        <label for="validationCustom01" class="form-label">Tanggal Pendaftaran</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span> <!-- Icon kalender -->
          <input type="date" class="form-control" name="tgl_pendaftaran" id="validationCustom01" required> <!-- Input Tanggal Pendaftaran -->
          <div class="invalid-feedback">
            Tanggal pendaftaran wajib diisi! <!-- Pesan kesalahan input Tanggal Pendaftaran -->
          </div>
        </div>

        <!-- Tombol untuk submit form -->
        <button class="btn btn-primary" type="submit" name="signUp">Sign Up</button>
        <!-- Tombol untuk mereset form -->
        <input type="reset" class="btn btn-warning text-light" value="Reset">
        <!-- Link untuk kembali ke halaman Sign In -->
        <p class="text-center">Sudah punya akun? <a href="sign_in.php" class="text-decoration-none text-primary">Sign In</a></p>

      </form> <!-- Penutup form -->

    </div> <!-- Penutup card -->

  </div> <!-- Penutup container -->

  <!-- Script untuk menggunakan jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Script kustom untuk validasi form -->
  <script src="../../style\js/script.js"></script>
</body>

<!-- Script untuk validasi form menggunakan Bootstrap -->
<script>
  (() => {
    'use strict'

    // Memilih semua form yang membutuhkan validasi kustom Bootstrap
    const forms = document.querySelectorAll('.needs-validation')

    // Melakukan iterasi pada setiap form
    Array.from(forms).forEach(form => {
      // Menambahkan event listener untuk saat form disubmit
      form.addEventListener('submit', event => {
        // Memeriksa jika form tidak valid
        if (!form.checkValidity()) {
          event.preventDefault() // Menghentikan pengiriman form
          event.stopPropagation() // Menghentikan penyebaran event ke elemen lain
        }

        form.classList.add('was-validated') // Menandai form sebagai sudah divalidasi
      }, false)
    })
  })()
</script>

<!-- Script untuk menggunakan Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html> <!-- Penutup halaman HTML -->