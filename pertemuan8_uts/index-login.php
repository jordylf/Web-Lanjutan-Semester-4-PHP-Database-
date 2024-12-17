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
    <title>DJ MOONEYES</title>

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
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo_mooneyes.png" alt=""></a>
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
                                    <li><a href="index-login.php">Profile</a></li>
                                    <li><a href="galleries-login.php">Galleries</a></li>
                                    <li><a href="event-login.php">Book Ticket</a></li>
                                    <li><a href="contact-login.php">Contact</a></li>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            </svg></a>
                                        <ul class="dropdown">
                                            <li><a href="profile-login.php">Profile</a></li>
                                            <li><a href="my-ticket-login.php">My Ticket</a></li>
                                            <li><a href="index.php" class="text-danger">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/background-1.png);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Disc Jockey</h6>`
                                <h2 data-animation="fadeInUp" data-delay="300ms">MOONEYES <span>MOONEYES</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="https://soundcloud.com/flyingdemons" target="_blank" class="btn oneMusic-btn mt-50">Listen on SoundCloud <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/background-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Disc Jockey</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">DICKY ARIF <span>DICKY ARIF</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Youtube <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>MOONEYES</p>
                        <h2>Biography</h2>
                    </div>
                </div>
            </div>
            <div class="section-heading">
                <img src="img/bg-img/image_2.png" alt="">
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>MOONEYES aka Dicky Arif is a DJ from Bandung, Indonesia and started his career from 2022.
                            Mooneyes setlist filled with Urban RnB Hip Hop, Amapiano, Afro, Baile, Twerk, Dancehall,
                            Breaks etc. Mooneyes based at a bar in Bandung, called WU Backroom or commonly known as BR.
                            Since 2022 until now. and also Mooneyes has performed a lot in various clubs and bars in
                            bandung.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Venue Played</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa1.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/wu_backroom/" target="_blank">
                                    <h5>WU Backroom</h5>
                                </a>
                                <p>Bandung</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa2.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/amorablokm/" target="_blank">
                                    <h5>Amora Blok M</h5>
                                </a>
                                <p>Jakarta</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa3.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/boshejogja/" target="_blank">
                                    <h5>Boshe</h5>
                                </a>
                                <p>Yogyakarta</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa4.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/lxxybali/?hl=es" target="_blank">
                                    <h5>LXXY</h5>
                                </a>
                                <p>Bali</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa5.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/behindthegreendoor_bali/" target="">
                                    <h5>Behind The Greendoor</h5>
                                </a>
                                <p>Bali</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/aa7.jpg" alt="">
                            <div class="album-info">
                                <a href="https://www.instagram.com/fourplay.bdg/" target="_blank">
                                    <h5>Fourplay Bar</h5>
                                </a>
                                <p>Bandung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Shared Stages</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss1.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/eone_cronik/?hl=id" target="_blank">
                                <h5>E-ONE</h5>
                            </a>
                            <p>Indonesian DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss2.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/jeremy_jayyy/" target="_blank">
                                <h5>Jeremy Jay</h5>
                            </a>
                            <p>Indonesian DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss3.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/sunburn.____/" target="_blank">
                                <h5>Sunburn</h5>
                            </a>
                            <p>Indonesian DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss4.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/tiaraeve/" target="_blank">
                                <h5>Tiara Eve</h5>
                            </a>
                            <p>Indonesian DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss5.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/tuantigabelas/" target="_blank">
                                <h5>Tuan Tigabelas</h5>
                            </a>
                            <p>Indonesian DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss6.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/fullcrate/" target="_blank">
                                <h5>Full Crate</h5>
                            </a>
                            <p>International DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss7.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/showtek/" target="_blank">
                                <h5>Showtek</h5>
                            </a>
                            <p>International DJ</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/ss8.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="https://www.instagram.com/yellowclaw/?hl=id" target="_blank">
                                <h5>Yellow Claw</h5>
                            </a>
                            <p>International DJ</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/fa.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>MOONEYES</p>
                            <h2>Achievement</h2>
                        </div>
                        <p>Winner the best 10th DJ Battle ICEPERIENCE 2019.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>W/U - BR/\VE X Mark Arkinson | remix MOONEYES</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/w_ u - BR__VE x Mark Arkinson (extended Bootleg).mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>NO UPCOMING EVENTS</p>
                            <h2>At The Moment</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

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