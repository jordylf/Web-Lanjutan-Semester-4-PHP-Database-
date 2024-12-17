<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Looping Nested For</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Looping Nested For</h2>
    <form method="post">
        <label for="jumlah_perulangan_i">Masukkan jumlah perulangan untuk i:</label>
        <input type="number" id="jumlah_perulangan_i" name="jumlah_perulangan_i" min="1" max="10" required>
        <br>
        <label for="jumlah_perulangan_j">Masukkan jumlah perulangan untuk j:</label>
        <input type="number" id="jumlah_perulangan_j" name="jumlah_perulangan_j" min="1" max="10" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $jumlah_perulangan_i = $_POST['jumlah_perulangan_i'];
    $jumlah_perulangan_j = $_POST['jumlah_perulangan_j'];
    for ($i = 0; $i < $jumlah_perulangan_i; $i++) {
        for ($j = 0; $j < $jumlah_perulangan_j; $j++) {
            echo "Ini perulangan ke (" . ($i + 1) . ", " . ($j + 1) . ")<br>";
        }
    }
}
// Jordy Lian Ferdinand - 2022230009
?>

