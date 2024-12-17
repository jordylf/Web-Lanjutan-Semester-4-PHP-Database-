<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Looping While</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Looping While</h2>
    <form method="post">
        <label for="jumlah_perulangan">Masukkan jumlah perulangan:</label>
        <input type="number" id="jumlah_perulangan" name="jumlah_perulangan" min="1" max="100" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $jumlah_perulangan = $_POST['jumlah_perulangan'];
    $ulangi = 0;
    while ($ulangi < $jumlah_perulangan) {
        echo "<p>Ini adalah perulangan ke-" . ($ulangi + 1) . "</p>";
        $ulangi++;
    }
}
// Jordy Lian Ferdinand - 2022230009
?>


