<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_username = "admin";
    $valid_password = "password";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
        session_start();
        $_SESSION["username"] = $username;

        setcookie("username", $username, time() + 30, "/");

        header("Location: welcome.php");
        exit;
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>
