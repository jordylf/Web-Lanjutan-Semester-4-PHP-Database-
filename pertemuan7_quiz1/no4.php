<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ NO. 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    .nav-link.active {
        border-radius: 7px;
        background-color: #EBEBEB;
    }

    .--tagline {
        position: fixed;
        left: 50%;
        bottom: 0;
        padding: 4px 10px;
        border-radius: 8px 8px 0 0;
        background-color: #7283F0;
        color: #FFFFFF;
        font-weight: bold;
        transform: translateX(-50%);
        transition: padding .25s ease-out;
        cursor: pointer;
        font-size: 15px;
    }

    .--tagline a {
        color: #FFFFFF;
    }

    .--tagline:hover {
        padding: 16px;
    }

    .--tagline a:hover {
        text-decoration: none;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <p style="padding-right: 30px;">NO. 4</p>
            <a class="navbar-brand" href="#">QUIZ 1 / Jordy Lian Ferdinand - 2022230009</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="no1.php">1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="no2.php">2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="no3.php">3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Hitung Angsuran Hutang</h2>
        <form method="POST">
            <div class="form-group">
                <label for="jumlah_pinjaman">Jumlah Pinjaman:</label>
                <input type="number" class="form-control" id="jumlah_pinjaman" name="jumlah_pinjaman" required>
            </div>
            <div class="form-group">
                <label for="lama_angsuran">Lama Angsuran (bulan):</label>
                <input type="number" class="form-control" id="lama_angsuran" name="lama_angsuran" required>
            </div>
            <div class="form-group">
                <label for="bunga_perbulan">Besar Bunga per Bulan (%):</label>
                <input type="number" class="form-control" id="bunga_perbulan" name="bunga_perbulan" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Hitung</button> <br><br>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
            $lama_angsuran = $_POST['lama_angsuran'];
            $bunga_perbulan = $_POST['bunga_perbulan'];

            $angsuran_pokok = $jumlah_pinjaman / $lama_angsuran;
            $total_angsuran = 0;

            echo "<h3>Daftar Pembayaran:</h3>";
            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
            echo "<thead><tr><th>Pembayaran Bulan</th><th>Angsuran Pokok</th><th>Bunga</th><th>Total Angsuran</th><th>Sisa Hutang</th></tr></thead>";
            echo "<tbody>";

            for ($i = 1; $i <= $lama_angsuran; $i++) {
                $bunga = $jumlah_pinjaman * ($bunga_perbulan / 100);
                $total_angsuran = $angsuran_pokok + $bunga;
                $sisa_hutang = $jumlah_pinjaman - $angsuran_pokok;

                echo "<tr>";
                echo "<td>Ke-$i</td>";
                echo "<td>Rp " . number_format($angsuran_pokok, 2, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($bunga, 2, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($total_angsuran, 2, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($sisa_hutang, 2, ',', '.') . "</td>";
                echo "</tr>";

                $jumlah_pinjaman = $sisa_hutang;
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('body').append(`<div class="--tagline"><a href="https://www.instagram.com/jordyy.lf/" target="_blank">#JordyMadeThis</a></div>`);
    </script>
</body>

</html>