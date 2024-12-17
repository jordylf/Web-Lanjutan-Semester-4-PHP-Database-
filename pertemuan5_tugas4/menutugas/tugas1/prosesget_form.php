<!DOCTYPE html>
<html lang="en">
<!-- INI PROSES TUGAS NO. 1 GET -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Proses Formulir</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #FFFFEC;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tugas1_get.php">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../menu.php">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="padding: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Hasil Proses Formulir</h2>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nama"], $_GET["tempat_lahir"], $_GET["tanggal_lahir"], $_GET["jenis_kelamin"], $_GET["alamat"])) {
                            $nama = $_GET["nama"];
                            $tempat_lahir = $_GET["tempat_lahir"];
                            $tanggal_lahir = $_GET["tanggal_lahir"];
                            $jenis_kelamin = $_GET["jenis_kelamin"];
                            $alamat = $_GET["alamat"];

                            echo "<p><strong>Nama:</strong> $nama</p>";
                            echo "<p><strong>Tempat Lahir:</strong> $tempat_lahir</p>";
                            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
                            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
                            echo "<p><strong>Alamat:</strong> $alamat</p>";
                        } else {
                            echo "<p>Data tidak tersedia.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>