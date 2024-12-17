<?php
session_start(); // Memulai sesi PHP untuk menyimpan informasi sesi pengguna

// Jika pengguna belum sign in, redirect ke halaman sign in admin
if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/admin/sign_in.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../css/java.css" rel="stylesheet"> <!-- Menghubungkan dengan file CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Admin Dashboard</title> <!-- Judul halaman -->
</head>

<style>
  /* Gaya CSS dalam tag <style> */
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
    /* Warna latar belakang body */
  }

  .navbar {
    background-color: #343a40;
    /* Warna latar navbar */
  }

  .navbar-brand h2 {
    color: #ffffff;
    /* Warna teks pada brand navbar */
  }

  .dropdown-menu {
    width: 200px;
    /* Lebar dropdown menu */
  }

  .card {
    border: none;
    border-radius: 15px;
    transition: transform 0.2s;
    /* Transisi efek hover card */
  }

  .card:hover {
    transform: scale(1.05);
    /* Efek zoom in ketika hover card */
  }

  .card img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  footer {
    background-color: #343a40;
    /* Warna latar footer */
    color: #ffffff;
    /* Warna teks pada footer */
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm"> <!-- Navbar dengan warna latar dan teks gelap -->
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <!-- Brand logo navbar -->
        <h2 class="fw-bold"><span class="text-danger">Dy</span>Perpus</h2> <!-- Judul brand -->
      </a>
      <div class="dropdown"> <!-- Dropdown untuk profil admin -->
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../assets/adminLogo.png" alt="adminLogo" width="40px"> <!-- Logo admin -->
        </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2"> <!-- Menu dropdown -->
          <li>
            <a class="dropdown-item text-center" href="#">
              <img src="../assets/adminLogo.png" alt="adminLogo" width="60px"> <!-- Logo admin dalam dropdown -->
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-secondary" href="#"> <span class="text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></a></span> <!-- Nama admin -->
            <b>
              <p class="text-center">Admin</p> <!-- Teks "Admin" -->
            </b>
          </li>
          <hr>
          <li>
            <a class="dropdown-item text-center mb-2" href="#">Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a> <!-- Status akun -->
          </li>
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a> <!-- Tombol sign out -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <?php
    // Variabel untuk menyimpan informasi tanggal
    $date = date('Y-m-d H:i:s');
    $day = date('l');
    $dayOfMonth = date('d');
    $month = date('F');
    $year = date('Y');
    ?>

    <div class="text-center my-5">
      <h1 class="fw-bold">Menu Admin Perpustakaan</h1> <!-- Judul halaman -->
      <p class="text-secondary fs-4"><?php echo "$day, $dayOfMonth $month $year"; ?></p> <!-- Tanggal -->
      <div class="alert alert-success" role="alert">
        Selamat datang admin - <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span> di Menu Admin DyPerpus <!-- Selamat datang admin -->
      </div>
    </div>

    <div class="row text-center g-3"> <!-- Grid untuk menu dashboard -->
      <div class="col-md-3">
        <div class="card">
          <a href="member/member.php">
            <img src="../assets/dashboardCardMember/memberperpus.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="buku/daftarBuku.php">
            <img src="../assets/dashboardCardMember/daftarbuku.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="peminjaman/peminjamanBuku.php">
            <img src="../assets/dashboardCardMember/bukupeminjaman.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="pengembalian/pengembalianBuku.php">
            <img src="../assets/dashboardCardMember/bukupengembalian.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="denda/daftarDenda.php">
            <img src="../assets/dashboardCardMember/dendatelat.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      </div>
    </div>

  </div>
  <footer class="fixed-bottom py-3 mt-5">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p> <!-- Pembuat halaman -->
      <p class="mb-0">Universitas Darma Persada</p> <!-- Universitas -->
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menghubungkan dengan jQuery versi 3.6.0 -->
  <script src="../style\js/script.js"></script> <!-- Menghubungkan dengan script.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Menghubungkan dengan Bootstrap bundle -->
</body>

</html>