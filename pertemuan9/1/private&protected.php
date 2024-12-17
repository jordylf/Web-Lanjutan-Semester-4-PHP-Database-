<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private & Protected Property - Jordy</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        <?php

        class Sneakers{
            // Properti protected bisa diakses dalam kelas ini dan kelas yang mewarisinya
            protected $brand;

            // Properti private hanya bisa diakses dalam kelas ini
            private $size;

            // Metode untuk mengatur merek sneakers
            public function setBrand($brand){
                $this->brand = $brand; // Mengatur nilai properti $brand dengan parameter yang diberikan
            }

            // Metode untuk mendapatkan merek sneakers
            public function getBrand(){
                return $this->brand; // Mengembalikan nilai properti $brand
            }

            // Metode untuk mengatur ukuran sneakers
            public function setSize($size){
                $this->size = $size; // Mengatur nilai properti $size dengan parameter yang diberikan
            }

            // Metode untuk mendapatkan ukuran sneakers
            public function getSize(){
                return $this->size; // Mengembalikan nilai properti $size
            }
        }

        class FashionSneakers extends Sneakers{
            // Properti protected bisa diakses dalam kelas ini dan kelas yang mewarisinya
            protected $color;

            // Metode untuk mengatur warna sneakers
            public function setColor($color){
                $this->color = $color; // Mengatur nilai properti $color dengan parameter yang diberikan
            }

            // Metode untuk mendapatkan warna sneakers
            public function getColor(){
                return $this->color; // Mengembalikan nilai properti $color
            }

            // Metode untuk menampilkan informasi sneakers fashion
            public function getSneakerInfo(){
                // Menggabungkan informasi dari beberapa properti dan mengembalikannya sebagai string
                return "Ini adalah " . "sneakers, " . $this->getBrand() . " " . $this->color . " size " . $this->getSize();
            }
        }

        $sneakers = new FashionSneakers(); // Membuat instance dari kelas FashionSneakers
        $sneakers->setBrand("Adidas"); // Mengatur merek sneakers menjadi "Adidas"
        $sneakers->setSize(42); // Mengatur ukuran sneakers menjadi 42
        $sneakers->setColor("Merah"); // Mengatur warna sneakers menjadi "red"
        echo $sneakers->getSneakerInfo(); // Output: These are red Adidas sneakers, size 42
        ?>

    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>