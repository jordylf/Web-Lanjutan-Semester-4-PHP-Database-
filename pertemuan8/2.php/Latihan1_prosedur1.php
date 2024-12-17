<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Jordy</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur:</label>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur">
                    </div>
                    <button type="submit" class="btn btn-primary">Perkenalkan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nama"]) && !empty($_POST["umur"])) {
        perkenalan($_POST["nama"], $_POST["umur"]);
    } else {
        echo "<div class='container mt-3 col-md-6'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Harap isi semua kolom.";
        echo "</div>";
        echo "</div>";
    }
}

function perkenalan($nama, $umur){
    $salam = "Assalamualaikum";

    echo "<div class='container mt-3 col-md-6'>";
    echo "<div class='alert alert-success' role='alert'>";
    echo $salam . ", <br/>";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Saya berusia " . $umur . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
    echo "</div>";
    echo "</div>";
}
?>