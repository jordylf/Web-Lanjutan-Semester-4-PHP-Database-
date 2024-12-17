<?php
$sneakers = array("1. Nike", "2. Adidas", "3. Puma", "4. Converse", "5. Vans", "6. New Balance", "7. Reebok", "8. Under Armour", "9. Skechers", "10. Asics");

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $index = (int)$input - 1;

    if ($index >= 0 && $index < count($sneakers)) {
        echo "<script>alert('Sneakers pada index $input adalah: $sneakers[$index]');</script>";
    } else {
        echo "<script>alert('Data tidak ada');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1 Dimensi Input Dinamis - Jordy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #sneakers-list li {
            margin-bottom: 5px;
            cursor: pointer;
        }

        #sneakers-list li:hover {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Jordy Lian Ferdinand (2022230009)</h3>
                <form method="post" action="">
                    <ul id="sneakers-list" class="list-group">
                        <?php
                        foreach ($sneakers as $index => $sneaker) {
                            echo "<li class='list-group-item' onclick=\"document.getElementById('input').value='" . ($index + 1) . "'\">$sneaker</li>";
                        }
                        ?>
                    </ul>
                    <div class="form-group mt-3">
                        <label for="input">Masukkan Nomor Sneakers:</label>
                        <input type="text" id="input" name="input" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>