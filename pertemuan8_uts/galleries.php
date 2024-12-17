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
    <title>Galleries - DJ MOONEYES</title>

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

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Profile</a></li>
                                    <li><a href="galleries.php">Galleries</a></li>
                                    <li><a href="event.php">Book Ticket</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Login</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>MOONEYES</p>
            <h2>Galleries</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <h4>Photos</h4>
            <div class="row oneMusic-albums">
                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item">
                    <div class="single-album">
                        <img src="img/bg-img/a1.jpg" alt="">
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item">
                    <div class="single-album">
                        <img src="img/bg-img/a2.jpg" alt="">
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item">
                    <div class="single-album">
                        <img src="img/bg-img/a3.jpg" alt="">
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                    <div class="single-album">
                        <img src="img/bg-img/a4.jpg" alt="">
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d h v">
                    <div class="single-album">
                        <img src="img/bg-img/a5.jpg" alt="">
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t i x">
                    <div class="single-album">
                        <img src="img/bg-img/a6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <h4>Videos</h4>
            <div class="row">
                <!-- Single Album Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-album-area">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@whendidthediamonds/video/7290109143699000581" data-video-id="7290109143699000581" style="max-width: 605px;min-width: 325px;">
                            <section> <a target="_blank" title="@whendidthediamonds" href="https://www.tiktok.com/@whendidthediamonds?refer=embed">@whendidthediamonds</a>
                                <p>TONIGHT THAT CROWD WAS LITTTTT😍</p> <a target="_blank" title="♬ original sound  - ariiifff" href="https://www.tiktok.com/music/original-sound-ariiifff-7290109244819704582?refer=embed">♬
                                    original sound - ariiifff</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-album-area">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@whendidthediamonds/video/7336096840493927685" data-video-id="7336096840493927685" style="max-width: 605px;min-width: 325px;">
                            <section> <a target="_blank" title="@whendidthediamonds" href="https://www.tiktok.com/@whendidthediamonds?refer=embed">@whendidthediamonds</a>
                                <p></p> <a target="_blank" title="♬ suara asli  - ariiifff" href="https://www.tiktok.com/music/suara-asli-ariiifff-7336096847570733829?refer=embed">♬
                                    suara asli - ariiifff</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
                <!-- Single Song Area -->
                <div class="col-12">
                    <h4>Mixtape</h4>
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-play-area">
                            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1758017127&color=%23857172&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                            <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                                <a href="https://soundcloud.com/flyingdemons" title="mooneyes" target="_blank" style="color: #cccccc; text-decoration: none;">mooneyes</a> · <a href="https://soundcloud.com/flyingdemons/club-set" title="club set?" target="_blank" style="color: #cccccc; text-decoration: none;">club set?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-play-area">
                            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1605050901&color=%23804c84&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                            <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                                <a href="https://soundcloud.com/flyingdemons" title="mooneyes" target="_blank" style="color: #cccccc; text-decoration: none;">mooneyes</a> · <a href="https://soundcloud.com/flyingdemons/waktu-indonesia-mixtape" title="waktu indonesia mixtape" target="_blank" style="color: #cccccc; text-decoration: none;">waktu indonesia mixtape</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-play-area">
                            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1654881390&color=%23516e79&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                            <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                                <a href="https://soundcloud.com/flyingdemons" title="mooneyes" target="_blank" style="color: #cccccc; text-decoration: none;">mooneyes</a> · <a href="https://soundcloud.com/flyingdemons/soul-supremacy" title="soul supremacy" target="_blank" style="color: #cccccc; text-decoration: none;">soul supremacy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->

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
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>