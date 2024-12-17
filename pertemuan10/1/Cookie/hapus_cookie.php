<!DOCTYPE html>
<html>

<head>
    <title>Hapus Cookie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cookie Telah Dihapus</h5>
                        <?php
                        // Hapus cookie
                        setcookie("nama", "", time() - 3600);
                        setcookie("alamat", "", time() - 3600);
                        echo "Cookie telah dihapus.";
                        ?>
                        <br>
                        <a href="index.html" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>