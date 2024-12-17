<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Huruf Abjad A-Z</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Looping Huruf Abjad A-Z</h2>
    <form method="post" action="">
        <label>Masukkan huruf awal (a-z): </label>
        <input type="text" name="start" maxlength="1"><br><br>
        <label>Masukkan huruf akhir (a-z): </label>
        <input type="text" name="end" maxlength="1"><br><br>
        <input type="submit" value="Tampilkan"> <br><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = strtolower($_POST['start']);
    $end = strtolower($_POST['end']);
    
    if ($start <= $end) {
        for ($i = ord($start); $i <= ord($end); $i++) {
            echo chr($i) . " ";
        }
    } else {
        echo "Inputan huruf tidak bisa terbalik.";
    }
}
// Jordy Lian Ferdinand - 2022230009
?>
