<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Switch-Case 1</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Switch-Case 1</h2>
    <form method="post" action="">
        Masukkan nilai / angka: <input type="text" name="a">
        <input type="submit" value="Submit">
</form>
</body>
</html>

<?php 
if(isset($_POST['a'])) {
    $a = $_POST['a'];

    switch ($a) {
        case 0:
            echo "Angka Nol";
            break;
        case 1 :
            echo "Angka Satu";
            break;
        case 2:
            echo "Angka Dua";
            break;
        case 3:
            echo "Angka Tiga";
            break;
        case 4 :
            echo "Angka Empat";
            break;
        case 5 :
            echo "Angka Lima";
            break;
        default:
            echo "Angka diluar jangkauan";
            break;
    }
} else {
    echo "Masukkan nilai variabel dari 'a'";
}

// Jordy Lian Ferdinand - 2022230009
?>