<!DOCTYPE html>
<html>

<head>
    <title>Tampil Cookie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Cookie</h5>
                        <?php
                        // Mengecek apakah cookie "nama" ada
                        if (!isset($_COOKIE["nama"])) {
                            echo "<p>Data Cookie tidak ada!</p>";
                            echo "<a href='index.html' class='btn btn-success'>Kembali</a>";
                        } else {
                            echo "<p>Nama anda adalah: " . $_COOKIE["nama"] . "</p>";
                            echo "<p>Alamat anda adalah: " . $_COOKIE["alamat"] . "</p>";
                            echo "<a href='hapus_cookie.php' class='btn btn-danger'>Hapus Cookie</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>