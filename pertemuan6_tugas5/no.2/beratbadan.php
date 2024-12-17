<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung BB DAN TB NO.2</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Hitung Berat Badan, dan Tinggi Badan Manusia</h2>
    <form method="post">
        <label for="berat_badan">Berat Badan (kg):</label>
        <input type="number" step="0.01" name="berat_badan" required><br>
        <label for="tinggi">Tinggi Badan (m):</label>
        <input type="number" step="0.01" name="tinggi" required><br>
        <input type="submit" value="Hitung">
    </form>
    <br>
</body>
</html>

<?php
if (isset($_POST["berat_badan"]) && isset($_POST["tinggi"])) {
    $berat_badan = $_POST["berat_badan"];
    $tinggi = $_POST["tinggi"];
    $bmi = $berat_badan / ($tinggi * $tinggi);
    if ($bmi < 19) {
        $kategori = "Kurus";
    } elseif ($bmi >= 19 && $bmi <= 24.9) {
        $kategori = "Ideal";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        $kategori = "Kelebihan Berat Badan (Gemuk)";
    } else {
        $kategori = "Obesitas";
    }
    echo "<h3>Hasil:</h3>";
    echo "Berat Badan: $berat_badan kg<br>";
    echo "Tinggi Badan: $tinggi m<br>";
    echo "IMT (Indeks Massa Tubuh) : " . number_format($bmi, 2) . "<br>";
    echo "Kategori Berat Badan: $kategori";
}
// Jordy Lian Ferdinand - 2022230009
?>

