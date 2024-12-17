<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ NO. 3</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            <p style="padding-right: 30px;">NO. 3</p>
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
                        <a class="nav-link active" href="#">3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="no4.php">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cari Bilangan Prima</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="start">Angka Awal:</label>
                                <input type="number" class="form-control" id="start" name="start" required>
                            </div>
                            <div class="form-group">
                                <label for="end">Angka Akhir:</label>
                                <input type="number" class="form-control" id="end" name="end" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Cari</button>
                        </form>
                        <hr>
                        <?php
                        if (isset($_POST['submit'])) {
                            $start = $_POST["start"];
                            $end = $_POST["end"];

                            if ($start > $end) {
                                echo "<div class='alert alert-danger mt-3'>Angka awal harus lebih kecil atau sama dengan angka akhir.</div>";
                            } else {
                                echo "<h6>Bilangan Prima dari $start hingga $end:</h6>";
                                for ($i = $start; $i <= $end; $i++) {
                                    $prima = true;
                                    if ($i < 2) {
                                        $prima = false;
                                    } else {
                                        for ($j = 2; $j <= sqrt($i); $j++) {
                                            if ($i % $j == 0) {
                                                $prima = false;
                                                break;
                                            }
                                        }
                                    }
                                    if ($prima) {
                                        echo "$i ";
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('body').append(`<div class="--tagline"><a href="https://www.instagram.com/jordyy.lf/" target="_blank">#JordyMadeThis</a></div>`);
    </script>
</body>

</html>