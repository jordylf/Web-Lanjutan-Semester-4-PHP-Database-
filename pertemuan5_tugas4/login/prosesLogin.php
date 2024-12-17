<?php
// INI PROSES TUGAS NO. 3 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data form telah disubmit
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Di sini Anda dapat memeriksa USERNAME DAN PASSWORD
        // Misalnya, kita akan memeriksa apakah username dan password adalah 'user1' dan 'password1'
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'pakafriyuda' && $password === 'password1') {
            echo json_encode(array('success' => true));
            exit; 
        } else {
            echo json_encode(array('success' => false, 'message' => 'Username atau password salah. Silakan coba lagi.'));
            exit;
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Data form tidak lengkap.'));
        exit;
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Metode tidak diizinkan.'));
    exit;
}
?>
