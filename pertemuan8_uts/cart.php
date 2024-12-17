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
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-lg-9">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                            <th scope="col">Ticket</th>
                                            <th scope="col" width="120">Quantity</th>
                                            <th scope="col" width="120">Price</th>
                                            <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartItems">
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true" id="Ticket">Party At The South</a>
                                                        <p class="text-muted small">Jakarta Selatan<br> September 15, 2024</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <select class="form-control" id="quantity" name="quantity">
                                                    <?php
                                                    // Loop PHP
                                                    for ($i = 1; $i <= 4; $i++) {
                                                        echo "<option value='$i'>$i</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <?php
                                                $harga_per_tiket = 359000;

                                                // Tampilkan total harga dengan format mata uang Rupiah
                                                $total_harga_formatted = "Rp. " . number_format($harga_per_tiket, 0, ',', '.');
                                                echo $total_harga_formatted;
                                                ?>
                                            </td>
                                            <td class="text-right d-none d-md-block"><a href="#" id="removeItem" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="text-danger">Disclaimer : You can only buy once, the maximum is 4 tickets, and if you buy again after this purchase, your previous ticket will be forfeited</p>
                    </aside>
                    <aside class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total price:</dt>
                                    <dd id="totalPrice" class="text-right ml-3">
                                        <?php echo $total_harga_formatted; ?>
                                    </dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right text-dark b ml-3"><strong id="totalAmount"><?php echo $total_harga_formatted; ?></strong></dd>
                                </dl>
                                <a href="#" id="makePurchase" class="btn btn-out btn-square btn-main oneMusic-btn mt-2" data-abc="true"> Make Purchase </a>
                                <a href="event-login.php" class="btn btn-out btn-square btn-main oneMusic-btn mt-2" data-abc="true">Continue Searching</a>
                            </div>
                        </div>
                    </aside>
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

    <script>
        // Function to update total price
        function updateTotalPrice(quantity) {
            var harga_per_tiket = 359000;
            var total_harga = harga_per_tiket * quantity;
            var totalPriceElement = document.getElementById("totalPrice");
            var totalAmountElement = document.getElementById("totalAmount");
            var total_harga_formatted = "Rp. " + (total_harga).toLocaleString('id-ID');
            totalPriceElement.textContent = total_harga_formatted;
            totalAmountElement.textContent = total_harga_formatted + " (" + quantity + " tickets)";
            // Simpan nilai harga dan jumlah ke dalam sessionStorage saat pembelian dilakukan
            sessionStorage.setItem('totalPrice', harga_per_tiket * quantity);
            sessionStorage.setItem('totalAmount', quantity);
            sessionStorage.setItem('orderStatus', 'Paid');
            sessionStorage.setItem('ticketTitle', 'Party at the South');
        }

        // Initialize total price
        updateTotalPrice(1);

        // Event listener for quantity change
        document.getElementById("quantity").addEventListener("change", function() {
            var quantity = this.value;
            updateTotalPrice(quantity);
        });

        // Event listener for remove item
        document.getElementById("removeItem").addEventListener("click", function(e) {
            e.preventDefault();
            var cartItems = document.getElementById("cartItems");
            cartItems.innerHTML = ""; // Remove all items
            updateTotalPrice(0); // Set total price to 0
        });

        // Event listener for make purchase
        document.getElementById("makePurchase").addEventListener("click", function(e) {
            e.preventDefault();
            var ticketTitle = document.querySelector('.title').textContent;
            var quantity = document.getElementById("quantity").value;
            // Save ticket information
            sessionStorage.setItem('ticketInfo', JSON.stringify({
                title: ticketTitle,
                quantity: quantity
            }));
            // Redirect to billing page
            window.location.href = "my-ticket-login.php"; // Ganti "billing.php" dengan URL halaman penagihan Anda
        });

        // Pada halaman yang sama dengan formulir pembelian
        document.getElementById("makePurchase").addEventListener("click", function(e) {
            e.preventDefault();
            var ticketTitle = document.querySelector('.title').textContent;
            var quantity = document.getElementById("quantity").value;

            // Buat formulir tersembunyi
            var form = document.createElement('form');
            form.method = 'post';
            form.action = 'my-ticket-login.php'; // Atur tujuan URL ke billing.php

            // Tambahkan input tersembunyi untuk setiap nilai yang ingin Anda kirimkan
            var titleInput = document.createElement('input');
            titleInput.type = 'hidden';
            titleInput.name = 'ticketTitle';
            titleInput.value = ticketTitle;
            form.appendChild(titleInput);

            var quantityInput = document.createElement('input');
            quantityInput.type = 'hidden';
            quantityInput.name = 'ticketQuantity';
            quantityInput.value = quantity;
            form.appendChild(quantityInput);

            // Tambahkan formulir ke dalam dokumen dan submit
            document.body.appendChild(form);
            form.submit();

            alert("You've purchased " + quantity + " Ticket." + "\nThank you for purchasing! Looking forward to seeing you there on\n" + ticketTitle + ".\nAt Jakarta Selatan - September 15, 2024");
        });
    </script>

</body>

</html>