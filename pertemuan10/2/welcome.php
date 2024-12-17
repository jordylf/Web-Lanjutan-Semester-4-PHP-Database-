<?php
session_start();

if (!isset($_SESSION["username"]) || empty($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];

if (isset($_COOKIE["username"])) {
    $cookie_username = $_COOKIE["username"];
} else {
    $cookie_username = "Cookie not set";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Welcome <?php echo $username; ?></div>
                    <div class="card-body">
                        <p>Session username: <?php echo $username; ?></p>
                        <p>Cookie username: <?php echo $cookie_username; ?></p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
