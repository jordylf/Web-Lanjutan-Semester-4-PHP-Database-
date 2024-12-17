<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - Jordy</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Jordy Lian Ferdinand (2022230009) <br> Masukkan Dua Angka untuk Dikalikan
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="angka1">Angka 1</label>
                                <input type="number" class="form-control" id="angka1" name="angka1" placeholder="Masukkan angka pertama">
                            </div>
                            <div class="form-group">
                                <label for="angka2">Angka 2</label>
                                <input type="number" class="form-control" id="angka2" name="angka2" placeholder="Masukkan angka kedua">
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button>
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
    if (isset($_POST["angka1"]) && isset($_POST["angka2"])) {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];

        if ($angka1 !== '' && $angka2 !== '' && is_numeric($angka1) && is_numeric($angka2)) {
            $hasil = $angka1 * $angka2;
            echo "<div class='container mt-3 col-md-5'>";
            echo "<div class='alert alert-success' role='alert'>";
            echo "Hasil perkalian dari $angka1 x $angka2 adalah $hasil.";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='container mt-3 col-md-5'>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Masukkan dua angka yang valid.";
            echo "</div>";
            echo "</div>";
        }
    }
}
?>