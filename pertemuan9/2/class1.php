<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 1 - Jordy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tugas Pertemuan 9 <br>
                <h6>Jordy Lian Ferdinand 2022230009</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            No. 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../1/protected.php">Protected Property</a>
                            <a class="dropdown-item" href="../1/private.php">Private Property</a>
                            <a class="dropdown-item" href="../1/private&protected.php">Private & Protected Property</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            No. 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../2/class1.php">Latihan Class 1</a>
                            <a class="dropdown-item" href="../2/class2.php">Latihan Class 2</a>
                            <a class="dropdown-item" href="../2/class3-$this.php">Latihan Class 2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Jordy Lian Ferdinand 2022230009 <br> Latihan Class 1</h5>
                    </div>
                    <div class="card-body">

                        <form method="post" action="">
                            <div class="form-group">
                                <label for="pemilik">Pemilik:</label>
                                <input type="text" class="form-control" id="pemilik" name="pemilik">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk:</label>
                                <input type="text" class="form-control" id="merk" name="merk">
                            </div>
                            <div class="form-group">
                                <label for="ukuran_layar">Ukuran Layar:</label>
                                <input type="text" class="form-control" id="ukuran_layar" name="ukuran_layar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <?php
                class laptop
                {
                    public $pemilik;
                    public $merk;
                    public $ukuran_layar;
                    function hidupkan_laptop()
                    {
                        return "Hidupkan Laptop";
                    }
                    function matikan_laptop()
                    {
                        return "Matikan Laptop";
                    }
                    function cover_laptop($ganti)
                    {
                        return $ganti . " Laptop diganti Cover";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $laptop_anto = new laptop();
                    $laptop_anto->pemilik = $_POST["pemilik"];
                    $laptop_anto->merk = $_POST["merk"];
                    $laptop_anto->ukuran_layar = $_POST["ukuran_layar"];
                ?>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Latihan Class 1</h5>
                            <p class="card-text">
                                <strong>Pemilik:</strong> <?php echo $laptop_anto->pemilik; ?><br>
                                <strong>Merk:</strong> <?php echo $laptop_anto->merk; ?><br>
                                <strong>Ukuran Layar:</strong> <?php echo $laptop_anto->ukuran_layar; ?><br>
                            </p>
                            <p class="card-text">
                                <?php echo $laptop_anto->hidupkan_laptop(); ?><br>
                                <?php echo $laptop_anto->cover_laptop("background"); ?><br>
                                <?php echo $laptop_anto->matikan_laptop(); ?><br>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>