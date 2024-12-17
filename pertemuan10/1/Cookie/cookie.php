<!DOCTYPE html>
<html>

<head>
    <title>Input Data Cookie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Input Data</h5>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nama = $_POST["nama"];
                            $alamat = $_POST["alamat"];

                            setcookie("nama", $nama, time() + 30);
                            setcookie("alamat", $alamat, time() + 30);
                            echo "Cookie telah dibuat.";
                        }
                        ?>
                        <br>
                        <a href="tampil_cookie.php" class="btn btn-primary">Lihat Cookie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>