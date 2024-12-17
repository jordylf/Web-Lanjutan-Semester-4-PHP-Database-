<?php
session_start();

unset($_SESSION["username"]);

session_destroy();

setcookie("username", "", time() + 30, "/");

header("Location: login.php");
exit;
?>
