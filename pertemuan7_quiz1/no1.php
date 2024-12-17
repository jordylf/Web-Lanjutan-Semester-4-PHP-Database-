<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUIZ NO. 1</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  .nav-link.active {
    border-radius: 7px;
    background-color: #EBEBEB;
  }

  .--tagline {
    position: fixed;
    left: 50%;
    bottom: 0;
    padding: 4px 10px;
    border-radius: 8px 8px 0 0;
    background-color: #7283F0;
    color: #FFFFFF;
    font-weight: bold;
    transform: translateX(-50%);
    transition: padding .25s ease-out;
    cursor: pointer;
    font-size: 15px;
  }

  .--tagline a {
    color: #FFFFFF;
  }

  .--tagline:hover {
    padding: 16px;
  }

  .--tagline a:hover {
    text-decoration: none;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <p style="padding-right: 30px;">NO. 1</p>
      <a class="navbar-brand" href="#">QUIZ 1 / Jordy Lian Ferdinand - 2022230009</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="no2.php">2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="no3.php">3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="no4.php">4</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <h2>Hitung Gaji Karyawan</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="jam_kerja">Masukkan Jam Kerja per Minggu:</label>
        <input type="number" class="form-control" id="jam_kerja" name="jam_kerja" required>
      </div>
      <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jam_kerja"])) {
      $jam_kerja = $_POST["jam_kerja"];

      $gaji = 0;

      if ($jam_kerja >= 50 && $jam_kerja <= 60) {
        $gaji = $jam_kerja * 5000;
      } elseif ($jam_kerja > 60) {
        $jam_normal = 60;
        $jam_lebih = $jam_kerja - 60;
        $gaji = ($jam_normal * 5000) + ($jam_lebih * 7500);
      } elseif ($jam_kerja < 50) {
        $gaji = $jam_kerja * (5000 - 2500);
      }

      echo "<h4 class='mt-4'>Total Gaji Karyawan: Rp " . number_format($gaji, 0, ',', '.') . "</h4>";
    }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $('body').append(`<div class="--tagline"><a href="https://www.instagram.com/jordyy.lf/" target="_blank">#JordyMadeThis</a></div>`);

    if (window.location.href.endsWith("no1.php")) {
      let noticeStat = sessionStorage.getItem('notice');
      if (!noticeStat) {
        alert("Hello Pak Afri, Selamat Datang Dijawaban Quiz 1\nPemilik : Jordy Lian Ferdinand");
        sessionStorage.setItem('notice', 'shown');
      }
    }
  </script>
</body>

</html>