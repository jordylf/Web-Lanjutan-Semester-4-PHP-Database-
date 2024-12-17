<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 2 - Jordy</title>
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
                        <h5 class="card-title">Jordy Lian Ferdinand 2022230009 <br> Latihan Class 2</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="camilan">Camilan:</label>
                                <input type="text" class="form-control" id="camilan" name="camilan" placeholder="Masukkan camilan">
                            </div>
                            <button type="submit" class="btn btn-primary">Makan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Membuat sebuah class dengan nama 'makanan'
    class makanan
    {
        // Membuat variabel publik dengan nama 'lapar' dan memberikan nilai awal 'Hari ini makan Soto'
        public $lapar = 'Hari ini makan Soto';

        // Membuat sebuah fungsi dengan nama 'makan' yang menerima parameter '$camilan'
        function makan($camilan)
        {
            $this->lapar = $camilan . ' Tidak kenyang';
            // Mengubah nilai variabel 'lapar' dengan menambahkan nilai dari parameter '$camilan' dan teks' Tidak kenyang'
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Membuat instance dari class 'makanan' dengan nama '$kucingpersia'
        $kucingpersia = new makanan;

        // Memanggil fungsi 'makan' dari objek '$kucingpersia' dengan parameter dari input form
        $kucingpersia->makan($_POST['camilan']);

        // Menampilkan nilai dari properti 'lapar' milik objek '$kucingpersia'
        echo '<div class="container mt-3">';
        echo '<div class="row">';
        echo '<div class="col-md-6 offset-md-3">';
        echo '<div class="alert alert-success" role="alert">' . $kucingpersia->lapar . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>