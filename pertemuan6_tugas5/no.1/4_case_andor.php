<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Case AND-OR</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Case AND-OR</h2>
    <form method="post" action="">
        Masukkan Nilai: <input type="text" name="nilai">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    switch (true) {
        case (($nilai > 90) and ($nilai < 101)):
            echo "Kategori Nilai : A";
            break;
        case (($nilai > 80) and ($nilai < 91)):
            echo "Kategori Nilai : B";
            break;
        case (($nilai > 60) and ($nilai < 81)):
            echo "Kategori Nilai : C";
            break;
        case (($nilai > 40) and ($nilai < 61)):
            echo "Kategori Nilai : D";
            break;
        case (($nilai >= 0) and ($nilai < 41)):
            echo "Kategori Nilai : E";
            break;
        default:
            echo "Nilai diluar kategori";
            break;
    }
}
// Jordy Lian Ferdinand - 2022230009
?>