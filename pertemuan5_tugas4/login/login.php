<!DOCTYPE html>
<html lang="en">
<!-- INI TUGAS NO. 3 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #f8f9fa;
    }

    .login-container {
        max-width: 400px;
        margin: auto;
        margin-top: 200px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .fab-notice a {
        position: fixed;
        bottom: 16px;
        right: 16px;
        background: blue;
        width: 50px;
        height: 50px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        font-size: 1.5rem;
    }

    .fab-notice a:hover {
        text-decoration: none;
        color: blueviolet;
    }

    .--notice {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(77, 77, 77, .83);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .--notice_container {
        background: #FFFFFF;
        padding: 32px;
        border-radius: 8px;
    }

    .--notice_header {
        text-align: center;
        font-size: 1.4rem;
        font-weight: bold;
    }

    .--notice_container p {
        text-align: center;
    }

    .--notice_content {
        margin: 24px 16px;
    }

    .--notice_content ul li span {
        font-size: .85rem;
        font-style: italic;
        font-weight: 400;
        color: #444444;
    }

    .--notice_content ul li span b {
        color: red;
        font-weight: 400;
    }

    ul {
        list-style-position: inside;
    }

    .close-notice {
        color: red;
        text-align: center;
    }

    .close-notice a {
        color: black;
        font-weight: bold;
    }

    .close-notice a:hover {
        text-decoration: none;
        color: blue;
    }

    .hide {
        display: none !important;
    }
</style>

<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Login Tugas PHP 5</h2>
            <form method="POST" action="login/prosesLogin.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
    <div class="fab-notice">
        <a href="javascript:void(0)">?</a>
    </div>
    <div class="--notice">
        <div class="--notice_container">
            <div class="--notice_header">Hi USER!</div>
            <p>Halaman ini dibuat untuk tugas perkuliahan PHP <br> Created by Jordy Lian Ferdinand / 2022230009</p>
            <div class="--notice_content">
                <h3>Feature:</h3>
                <ul>
                    <li>Validate user login <span>(halaman lain tidak bisa dibuka jika belum login)</span></li>
                </ul>
                <h3 style="margin-top: 16px;">Note:</h3>
                <ul>
                    <li>Username & Password : id: <b>pakafriyuda</b> pw: <b>password1</b> <span>(huruf BESAR & kecil berpengaruh)</span>
                    </li>
                </ul>
            </div>
            <div class="close-notice">
                <a href="javascript:void(0)">Tutup</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

<script>
    let noticeStat = localStorage.getItem('notice');

    if (noticeStat) {
        $('.--notice').addClass('hide');
    }
    $('.close-notice a').on('click', function() {
        $('.--notice').addClass('hide');
        localStorage.setItem('notice', 'close');
    });
    $('.fab-notice a').on('click', function() {
        $('.--notice').removeClass('hide');
        localStorage.removeItem('notice');
    });

    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'prosesLogin.php',
                data: $('form').serialize(),
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.success) {
                        // Jika login berhasil, tampilkan alert sukses
                        alert('Login berhasil!');
                        window.location.href = '../menutugas/menu.php'; // Redirect ke menu.php
                    } else {
                        // Jika login gagal, tampilkan alert dengan pesan kesalahan
                        alert(response.message);
                    }
                },
                error: function() {
                    // Jika terjadi kesalahan dalam permintaan AJAX, tampilkan alert kesalahan
                    alert('Terjadi kesalahan dalam permintaan. Silakan coba lagi.');
                }
            });
        });
    });
</script>

</html>