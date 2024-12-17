<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 - Jordy</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Jordy Lian Ferdinand (2022230009) <br> Perkenalan
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="form-group">
                                <label for="tahun_lahir">Tahun Lahir:</label>
                                <input type="number" class="form-control" id="tahun_lahir" name="tahun_lahir" placeholder="Masukkan tahun lahir">
                            </div>
                            <button type="submit" class="btn btn-primary">Perkenalkan</button>
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
    if (isset($_POST["nama"]) && isset($_POST["tahun_lahir"])) {
        $nama = $_POST["nama"];
        $tahun_lahir = $_POST["tahun_lahir"];

        if ($nama !== '' && $tahun_lahir !== '' && is_numeric($tahun_lahir)) {
            // Memanggil fungsi perkenalan dengan data dari form
            perkenalan($nama, $tahun_lahir);
        } else {
            echo "<div class='container mt-3 col-md-5'>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Masukkan nama dan tahun lahir yang valid.";
            echo "</div>";
            echo "</div>";
        }
    }
}

// Fungsi perkenalan dengan parameter tambahan tahun lahir
function perkenalan($nama, $tahun_lahir, $salam = "Assalamualaikum")
{
    echo "<div class='container mt-3 col-md-5'>";
    echo "<div class='alert alert-success' role='alert'>";
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // Menghitung umur berdasarkan tahun lahir yang diberikan
    $umur = date("Y") - $tahun_lahir;
    echo "Saya berusia " . $umur . " tahun<br/>";
    echo "Senang berkenalan dengan anda!<br/>";
    echo "</div>";
    echo "</div>";
}
?>