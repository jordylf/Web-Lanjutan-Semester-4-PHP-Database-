<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Break and Continue</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Break and Continue</h2>
    <form method="post">
        <label for="batas_loop">Masukkan batas loop:</label>
        <input type="number" id="batas_loop" name="batas_loop" min="1" max="100" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $batas_loop = $_POST['batas_loop'];
    for ($i = 1; $i < $batas_loop; $i++) {
        if ($i == 5) {
            continue;
        }
        if ($i == 8) {
            break;
        }
        echo "<br>$i ";
    }
}
// Jordy Lian Ferdinand - 2022230009
?>

