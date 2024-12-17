 <!-- Jordy Lian Ferdinand - 2022230009 -->
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'contoh@gmail.com' && $password == 'password123') {
            echo "<script>alert('Login berhasil. Selamat datang!');</script>";
            echo "<script>window.location.href = 'index-login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Email atau password salah. Silakan coba lagi.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Mohon isi semua yang harus diisi.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit;
    }
}
?>
