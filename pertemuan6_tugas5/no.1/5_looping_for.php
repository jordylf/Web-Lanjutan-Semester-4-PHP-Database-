<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Looping For</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Looping For</h2>
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
    for ($i = 0; $i < $jumlah_perulangan; $i++) {
        echo "<h2>Ini perulangan ke-" . ($i + 1) . "</h2>";
    }
}
// Jordy Lian Ferdinand - 2022230009
?>


