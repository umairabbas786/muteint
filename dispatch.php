<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mute Int</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="wrap">

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo">
                    <!-- <h1 class="text-light"><a href="index.html"><span>Plato</span></a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="index.html"><img src="assets/img/logo.png" width="100%" alt="Logo" class="img-fluid"></a>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                        <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                        <li><a class="nav-link scrollto" href="index.html#pricing">Pricing</a></li>
                        <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <main id="main">
            <br>

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container">

                    <div class="text-center" data-aos="zoom-in">
                        <h1 class="text-32 text-white font-weight-bolder display-3 mb-5">DISPATCH NOW</h1>
                        <a class="cta-btn" href="tel:+15105099635">(510) 509-9635</a>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title" data-aos="fade-down">
                        <span>Get A Quote</span>
                        <h2>Get A Quote</h2>
                    </div>

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="comapny_name" class="mb-2"><b>Company Name <span
                                            class="text-danger">*</span></b></label>
                                <input type="text" name="comapny_name" class="form-control" id="comapny_name"
                                    placeholder="Comapny Name" required>
                            </div>
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="motor_carrier" class="mb-2"><b>Motor Carrier # <span
                                            class="text-danger">*</span></b></label>
                                <input type="text" class="form-control" name="motor_carrier" id="motor_carrier"
                                    placeholder="Motor Carrier Number" required>
                            </div>
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="date" class="mb-2"><b>Authority Start Date <span
                                            class="text-danger">*</span></b></label>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="date" class="mb-2"><b>Trailer Type <span
                                            class="text-danger">*</span></b></label>
                                <select name="trailer_type" class="form-select" id="trailer_type">
                                    <option value="" selected disabled>Select Trailer Type</option>
                                    <option value="Dry Vans">Dry Vans</option>
                                    <option value="Flatbeds">Flatbeds</option>
                                    <option value="Hot Shots">Hot Shots</option>
                                    <option value="Reefers">Reefers</option>
                                    <option value="Box Truck">Box Truck</option>
                                </select>
                            </div>
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="desired_region" class="mb-2"><b>Desired Region(s) <span
                                            class="text-danger">*</span></b></label>
                                <ul style="list-style-type:none;" id="desider_regions">
                                    <li>
                                        <input name="48states" type="checkbox" value="48 States" id="48states">
                                        <label for="48states" id="48states">48 States</label>
                                    </li>
                                    <li>
                                        <input name="southeast" type="checkbox" value="Southeast" id="southeast">
                                        <label for="southeast" id="southeast">Southeast</label>
                                    </li>
                                    <li>
                                        <input name="Southwest" type="checkbox" value="Southwest" id="Southwest">
                                        <label for="Southwest" id="Southwest">Southwest</label>
                                    </li>
                                    <li>
                                        <input name="Northeast" type="checkbox" value="Northeast" id="Northeast">
                                        <label for="Northeast" id="Northeast">Northeast</label>
                                    </li>
                                    <li>
                                        <input name="Midwest" type="checkbox" value="Midwest" id="Midwest">
                                        <label for="Midwest" id="Midwest">Midwest</label>
                                    </li>
                                    <li>
                                        <input name="westcoast" type="checkbox" value="westcoast" id="westcoast">
                                        <label for="westcoast" id="westcoast">West Coast</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 offset-md-3 mb-3 form-group">
                                <label for="desired_region" class="mb-2"><b>Driver Home Time <span
                                            class="text-danger">*</span></b></label>
                                <ul style="list-style-type:none;" id="driver_home_time">
                                <li>
								<input name="every_other_day" type="checkbox" value="Every Other Day" id="every_other_day">
								<label for="every_other_day" id="every_other_day">Every Other Day</label>
							</li>
                            <li>
								<input name="every_weekend" type="checkbox" value="Every Weekend" id="every_weekend">
								<label for="every_weekend" id="every_weekend">Every Weekend</label>
							</li>
                            <li>
								<input name="every_two_weeks" type="checkbox" value="Every Two Weeks" id="every_two_weeks">
								<label for="every_two_weeks" id="every_two_weeks">Every Two Weeks</label>
							</li>
                            <li>
								<input name="flexible" type="checkbox" value="Flexible" id="flexible">
								<label for="flexible" id="flexible">Flexible</label>
							</li>
                                </ul>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-block btn-success">Submit</button>
                            </div>
                    </form>

                </div>
            </section><!-- End Services Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container py-4">
                <div class="copyright">
                    2021 &copy; Copyright <strong><span>MUTE INT</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://umairabbas.me">Umair Abbas</a>
                </div>
            </div>
        </footer><!-- End Footer -->

    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>