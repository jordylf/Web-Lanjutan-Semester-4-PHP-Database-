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
    <title>Book Ticket - DJ MOONEYES</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>MOONEYES</p>
            <h2>Book a Ticket</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <section class="events-area section-padding-100">
    <div class="container mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="profile-login.php">Profile</a>
            <a class="nav-link" href="my-ticket-login.php">My Ticket</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="card mb-4">
            <div class="card-header">My Ticket</div>
            <div class="card-body p-0">
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">Ticket Title</th>
                                <th class="border-gray-200" scope="col">Date</th>
                                <th class="border-gray-200" scope="col">Total Price</th>
                                <th class="border-gray-200" scope="col">Quantity</th>
                                <th class="border-gray-200" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span id="ticketEvent"></span></td>
                                <td><span id="currentDate"></span></td>
                                <td><span id="amountValue"></span></td>
                                <td><span id="quantityValue"></span></td>
                                <td><span id="statusCell"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- ##### Events Area End ##### -->

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
                            <li class="copywrite-text">Follow MOONEYES on:<a href="https://www.instagram.com/dickyarifff/" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true" style="color: white;"></i></a>
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

    <script>
        var status = sessionStorage.getItem('orderStatus');

        document.addEventListener("DOMContentLoaded", function() {
            var ticketTitle = sessionStorage.getItem('ticketTitle');

            // Memasukkan nilai ke dalam elemen dengan id "ticketEvent"
            document.getElementById("ticketEvent").textContent = ticketTitle;
        });

        if (status === 'Paid') {
            document.getElementById("statusCell").innerHTML = '<span class="badge bg-success">Paid</span>';
        } else {
            document.getElementById("statusCell").textContent = ''; 
        }

        var amountValue = sessionStorage.getItem('totalPrice');
        var quantityValue = sessionStorage.getItem('totalAmount');

        document.getElementById("amountValue").textContent = "Rp. " + amountValue.toLocaleString('id-ID');
        document.getElementById("quantityValue").textContent = quantityValue;

        var currentDate = new Date().toLocaleDateString();
        document.getElementById("currentDate").textContent = currentDate;
    </script>

</body>

</html>