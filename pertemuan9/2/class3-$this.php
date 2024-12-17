<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 3 - $this</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tugas Pertemuan 9 <br>
                <h6>Jordy Lian Ferdinand 2022230009</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            No. 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../1/protected.php">Protected Property</a>
                            <a class="dropdown-item" href="../1/private.php">Private Property</a>
                            <a class="dropdown-item" href="../1/private&protected.php">Private & Protected Property</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            No. 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../2/class1.php">Latihan Class 1</a>
                            <a class="dropdown-item" href="../2/class2.php">Latihan Class 2</a>
                            <a class="dropdown-item" href="../2/class3-$this.php">Latihan Class 2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Jordy Lian Ferdinand 2022230009 <br> Class 3 - Mengenal $this</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="warna">Warna:</label>
                                <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan warna mobil">
                            </div>
                            <div class="form-group">
                                <label for="jumlahRoda">Jumlah Roda:</label>
                                <input type="text" class="form-control" id="jumlahRoda" name="jumlahRoda" placeholder="Masukkan jumlah roda mobil">
                            </div>
                            <div class="form-group">
                                <label for="jumlahKursi">Jumlah Kursi:</label>
                                <input type="text" class="form-control" id="jumlahKursi" name="jumlahKursi" placeholder="Masukkan jumlah kursi mobil">
                            </div>
                            <button type="submit" class="btn btn-primary">Tampilkan Informasi Mobil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendefinisikan kelas bernama "Mobil"
        class Mobil
        {
            // Mendeklarasikan tiga properti publik: warna, jumlahKursi, dan jumlahRoda
            public $warna;
            public $jumlahKursi;
            public $jumlahRoda;

            // Mendefinisikan metode "tampilkan" untuk menampilkan informasi tentang mobil
            public function tampilkan()
            {
                echo "<div class='container mt-3'>";
                echo "<div class='alert alert-success' role='alert'>";
                echo "Mobil dengan warna " . $this->warna . " memiliki " . $this->jumlahRoda . " buah roda dan " . $this->jumlahKursi . " kursi.";
                echo "</div>";
                echo "</div>";
            }
        }

        // Inisiasi objek dari kelas "Mobil" 
        $panggil_class_mobil = new Mobil;

        // Mengisi nilai properti-properti objek dengan data dari form
        $panggil_class_mobil->warna = $_POST['warna'];
        $panggil_class_mobil->jumlahRoda = $_POST['jumlahRoda'];
        $panggil_class_mobil->jumlahKursi = $_POST['jumlahKursi'];

        // Memanggil metode "tampilkan" untuk menampilkan informasi tentang mobil 
        $panggil_class_mobil->tampilkan();
    }
    ?>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>