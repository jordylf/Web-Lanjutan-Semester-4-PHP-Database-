<!DOCTYPE html>
<html lang="en">
<!-- INI TUGAS NO. 2 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Tugas NO. 2 PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #F1E4C1;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../tugas1/tugas1_post.php">Tugas 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../menu.php">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title text-center">Kalkulator PHP</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="num1">Angka Pertama:</label>
                                <input type="number" class="form-control" id="num1" name="num1" required>
                            </div>
                            <div class="form-group">
                                <label for="num2">Angka Kedua:</label>
                                <input type="number" class="form-control" id="num2" name="num2" required>
                            </div>
                            <div class="form-group">
                                <label for="operation">Operasi:</label>
                                <select class="form-control" id="operation" name="operation">
                                    <option value="tambah">Tambah</option>
                                    <option value="kurang">Kurang</option>
                                    <option value="kali">Kali</option>
                                    <option value="bagi">Bagi</option>
                                    <option value="kuadrat">Kuadrat</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h4 class="text-center">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"], $_POST["num2"], $_POST["operation"])) {
                                $num1 = $_POST["num1"];
                                $num2 = $_POST["num2"];
                                $operation = $_POST["operation"];

                                switch ($operation) {
                                    case "tambah":
                                        $result = $num1 + $num2;
                                        echo "Hasil: $result";
                                        break;
                                    case "kurang":
                                        $result = $num1 - $num2;
                                        echo "Hasil: $result";
                                        break;
                                    case "kali":
                                        $result = $num1 * $num2;
                                        echo "Hasil: $result";
                                        break;
                                    case "bagi":
                                        if ($num2 != 0) {
                                            $result = $num1 / $num2;
                                            echo "Hasil: $result";
                                        } else {
                                            echo "Pembagian dengan nol tidak diperbolehkan";
                                        }
                                        break;
                                    case "kuadrat":
                                        $result = $num1 ** 2;
                                        echo "Hasil Kuadrat dari Angka Pertama: $result";
                                        break;
                                    default:
                                        echo "Operasi tidak valid";
                                }
                            }
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>