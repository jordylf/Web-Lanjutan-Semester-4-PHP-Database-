<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Jordy</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Jordy Lian Ferdinand (2022230009) <br> Masukkan Tahun Lahir Anda dan Tahun Sekarang
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="tahun_lahir">Tahun Lahir</label>
                                <input type="number" class="form-control" id="tahun_lahir" name="tahun_lahir" placeholder="Masukkan tahun lahir">
                            </div>
                            <div class="form-group">
                                <label for="tahun_sekarang">Tahun Sekarang</label>
                                <input type="number" class="form-control" id="tahun_sekarang" name="tahun_sekarang" placeholder="Masukkan tahun sekarang">
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung Umur</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tahun_lahir"]) && isset($_POST["tahun_sekarang"])) {
        $tahun_lahir = $_POST["tahun_lahir"];
        $tahun_sekarang = $_POST["tahun_sekarang"];

        if ($tahun_lahir > 0 && $tahun_sekarang > 0 && $tahun_lahir <= $tahun_sekarang) {
            $umur = $tahun_sekarang - $tahun_lahir;
            echo "<div class='container mt-3 col-md-5'>";
            echo "<div class='alert alert-success' role='alert'>";
            echo "Umur Anda adalah " . $umur . " tahun.";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='container mt-3 col-md-5'>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Masukkan tahun lahir yang valid dan pastikan tahun lahir lebih kecil atau sama dengan tahun sekarang.";
            echo "</div>";
            echo "</div>";
        }
    }
}
?>