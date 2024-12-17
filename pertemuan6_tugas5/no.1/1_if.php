<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi If</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi If</h2>
    <form method="post" action="">
        Masukkan nilai / angka : <input type="text" name="a">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['a'])) {
    $a = $_POST['a'];

    if ($a == "0") {
        echo "Angka Nol";
    } elseif ($a == "1") {
        echo "Angka Satu";
    } elseif ($a == "2") {
        echo "Angka Dua";
    } elseif ($a == "3") {
        echo "Angka Tiga";
    } elseif ($a == "4") {
        echo "Angka Empat";
    } elseif ($a == "5") {
        echo "Angka Lima";
    } else {
        echo "Angka diluar jangkauan";
    }
} else {
    echo "Masukkan nilai variabel dari 'a'";
}

// Jordy Lian Ferdinand - 2022230009
?>