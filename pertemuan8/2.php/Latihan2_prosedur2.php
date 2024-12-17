<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Jordy</title>
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
                        <label for="salam">Salam:</label>
                        <input type="text" class="form-control" id="salam" name="salam" placeholder="Masukkan salam">
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
    if (!empty($_POST["nama"]) && !empty($_POST["salam"])) {
        perkenalan($_POST["nama"], $_POST["salam"]);
    } else {
        echo "<div class='container mt-3 col-md-6'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Harap isi semua kolom.";
        echo "</div>";
        echo "</div>";
    }
}

function perkenalan($nama, $salam){
    echo "<div class='container mt-3 col-md-6'>";
    echo "<div class='alert alert-success' role='alert'>";
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
    echo "</div>";
    echo "</div>";
}
?>