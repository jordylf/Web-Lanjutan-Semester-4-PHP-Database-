<!-- Jordy Lian Ferdinand - 2022230009 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contact - DJ MOONEYES</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo_mooneyes.png" alt=""></a>
                        <h7 class="text-light">
                            <?php
                            $day = date('w');
                            switch ($day) {
                                case 0:
                                    $hari = "Sunday";
                                    break;
                                case 1:
                                    $hari = "Monday";
                                    break;
                                case 2:
                                    $hari = "Tuesday";
                                    break;
                                case 3:
                                    $hari = "Wednesday";
                                    break;
                                case 4:
                                    $hari = "Thursday";
                                    break;
                                case 5:
                                    $hari = "Friday";
                                    break;
                                case 6:
                                    $hari = "Saturday";
                                    break;
                            }

                            $tanggal = date('d');
                            $bulan = date('F');
                            $tahun = date('Y');

                            echo "$hari, $tanggal $bulan $tahun";
                            ?>
                        </h7>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Email Sucessfully sent!</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-50">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <?php
                    // Periksa apakah form telah disubmit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Ambil nilai dari form
                        $name = isset($_POST['name']) ? $_POST['name'] : '';
                        $email = isset($_POST['email']) ? $_POST['email'] : '';
                        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
                        $message = isset($_POST['message']) ? $_POST['message'] : '';

                        // Tampilkan hasilnya
                        echo "<div class='alert'>";
                        echo "<h2>Data Received from you:</h2>";
                        echo "<p>Name: $name</p>";
                        echo "<p>Email: $email</p>";
                        echo "<p>Subject: $subject</p>";
                        echo "<p>Message: $message</p>";
                        echo "<p><b>from admin to you: <br> Message has been sent succesfully to DJ MOONEYES, He will reply this message as soon as possible, Thank You!</b></p>";
                        echo "</div>";
                    } else {
                        // Jika tidak, tampilkan pesan kesalahan
                        echo "<div class='alert'>";
                        echo "<h2>Error: Invalid method</h2>";
                        echo "</div>";
                    }
                    ?>
                    <div class="text-center padding-bottom: 20px;">
                        <button onclick='window.location.href="contact.php"' class='btn oneMusic-btn'>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">MOONEYES</h3>
                    <p class="copywrite-text"><a href="#">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> by MOONEYES | Proudly
                            created with<a href="https://instagram.com/jordyy.lf" target="_blank" class="text-white">
                                Jordy Lian
                                Ferdinand</a>
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li class="copywrite-text">Follow MOONEYES on:<a href="https://www.instagram.com/dickyarifff/" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/@flyingdemons666" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://twitter.com/dickyarifff" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="https://kit.fontawesome.com/af50d4530b.js" crossorigin="anonymous"></script>
    <script src="js/active.js"></script>
</body>

</html>