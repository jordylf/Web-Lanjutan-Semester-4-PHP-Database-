<?php
session_start();
if (isset($_POST['username']) && isset($_POST['nama'])) {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["nama"] = $_POST['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Proses</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php if (isset($_SESSION["username"]) && isset($_SESSION["nama"])) : ?>
                            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                            <p><strong>Nama:</strong> <?php echo htmlspecialchars($_SESSION["nama"]); ?></p>
                            <a href='home.php' class='btn btn-danger btn-block'>Kembali</a>
                        <?php else : ?>
                            <p>Variabel sesi belum diset.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>