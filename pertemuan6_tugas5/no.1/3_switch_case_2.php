<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Switch-Case 2</title>
</head>
<body>
    <p>Jordy Lian Ferdinand - 2022230009</p>
    <h2>Kondisi Switch-Case 2</h2>
    <form method="post" action="">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if(isset($_POST['jenis_kelamin'])) {
    $rudi = $_POST['jenis_kelamin'];

    switch ($rudi) {
        case 'pria':
            echo 'Rudi adalah seorang pria';
            break;
        case 'wanita':
            echo 'Oh ternyata Rudi adalah seorang wanita'; 
            break;
        default:
            echo 'Perkenalkan, nama saya Rudi';
            break;
    }
} else {
    echo 'Silakan pilih jenis kelamin Rudi.';
}

// Jordy Lian Ferdinand - 2022230009
?>



