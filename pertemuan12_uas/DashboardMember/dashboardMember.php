<?php
session_start(); // Memulai sesi

// Memeriksa apakah pengguna sudah masuk (signIn)
if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/member/sign_in.php"); // Redirect ke halaman sign in jika belum masuk
  exit; // Menghentikan eksekusi skrip lebih lanjut
}

// Memeriksa jika ada notifikasi login_success dalam sesi, maka tampilkan alert
if (isset($_SESSION["login_success"])) {
  echo "<script>alert('Login berhasil!');</script>"; // Menampilkan alert jika login berhasil
  unset($_SESSION["login_success"]); // Menghapus notifikasi login_success dari sesi setelah ditampilkan
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="../css/java.css" rel="stylesheet"> <!-- Memuat file CSS lokal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Member Dashboard</title>
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

    .dropdown-menu {
      width: 200px;
    }

    .card {
      border: none;
      border-radius: 15px;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    footer {
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
      <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../assets/memberLogo.png" alt="memberLogo" width="40px">
        </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
          <li>
            <a class="dropdown-item text-center" href="#">
              <img src="../assets/memberLogo.png" alt="memberLogo" width="60px" class="my-3">
            </a>
          </li>
          <li>
            <p class="dropdown-item text-center text-secondary"><span class="text-capitalize"><?php echo $_SESSION['member']['nama']; ?></span></p>
            <b>
              <p class="text-center">Member</p>
            </b>
          </li>
          <hr>
          <li>
            <a class="dropdown-item text-center mb-2" href="#">Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a>
          </li>
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <?php
    $date = date('Y-m-d H:i:s');
    $day = date('l');
    $dayOfMonth = date('d');
    $month = date('F');
    $year = date('Y');
    ?>
    <div class="text-center my-5">
      <h1 class="fw-bold">Menu Perpustakaan</h1>
      <p class="text-secondary fs-4"><?php echo "$day, $dayOfMonth $month $year"; ?></p>
      <div class="alert alert-success" role="alert">
        Selamat datang member - <span class="text-capitalize fw-bold"><?php echo $_SESSION['member']['nama']; ?></span> di Menu DyPerpus
      </div>
    </div>

    <div class="row text-center g-4">
      <div class="col-md-3">
        <div class="card">
          <a href="buku/daftarBuku.php">
            <img src="../assets/dashboardCardMember/daftarbuku.png" class="card-img-top" alt="daftar buku">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="formPeminjaman/TransaksiPeminjaman.php">
            <img src="../assets/dashboardCardMember/bukupeminjaman.png" class="card-img-top" alt="peminjaman">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="formPeminjaman/TransaksiPengembalian.php">
            <img src="../assets/dashboardCardMember/bukupengembalian.png" class="card-img-top" alt="pengembalian">
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="formPeminjaman/TransaksiDenda.php">
            <img src="../assets/dashboardCardMember/dendatelat.png" class="card-img-top" alt="denda">
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer class="fixed-bottom py-3 mt-5">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0">Created by <span class="text-danger">Jordy Lian Ferdinand</span> © 2024</p>
      <p class="mb-0">Universitas Darma Persada</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../style\js/script.js"></script>
</body>

</html>
