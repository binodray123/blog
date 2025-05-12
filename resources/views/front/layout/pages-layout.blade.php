<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('pageTitle')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="front/assets/img/favicon.png" rel="icon" />
    <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link
        href="front/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="front/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet" />
    <link href="front/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="front/assets/css/main.css" rel="stylesheet" />

    <!-- andrea css start -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="front/css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="front/css/animate.css" />

    <link rel="stylesheet" href="front/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="front/css/magnific-popup.css" />

    <link rel="stylesheet" href="front/css/aos.css" />

    <link rel="stylesheet" href="front/css/ionicons.min.css" />

    <link rel="stylesheet" href="front/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="front/css/jquery.timepicker.css" />

    <link rel="stylesheet" href="front/css/flaticon.css" />
    <link rel="stylesheet" href="front/css/icomoon.css" />
    <link rel="stylesheet" href="front/css/style.css" />
    <!-- css End -->

    @stack('stylesheets')

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div
            class="container position-relative d-flex align-items-center justify-content-between">
            <a
                href="index.html"
                class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">LaraBlog</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="single-post.html">Single Post</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Categories</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="category.html">Category 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Dropdown</span>
                                    <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="category.html">Category 2</a></li>
                            <li><a href="category.html">Category 3</a></li>
                            <li><a href="category.html">Category 4</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">LaraBlog</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3">
                            <strong>Phone:</strong> <span>+977 9742458391</span>
                        </p>
                        <p><strong>Email:</strong> <span>ybinod857@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hic solutasetp</h4>
                    <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">LaraBlog</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by
                <a href="https://bootstrapmade.com/">Bootstrap</a> Distributed by
                <a href=“https://themewagon.com>Laravel
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a
        href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="front/assets/vendor/php-email-form/validate.js"></script>
    <script src="front/assets/vendor/aos/aos.js"></script>
    <script src="front/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="front/assets/js/main.js"></script>
    <!-- Andrea file Start -->
    <script src="front/js/jquery.min.js"></script>
    <script src="front/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="front/js/popper.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery.easing.1.3.js"></script>
    <script src="front/js/jquery.waypoints.min.js"></script>
    <script src="front/js/jquery.stellar.min.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/aos.js"></script>
    <script src="front/js/jquery.animateNumber.min.js"></script>
    <script src="front/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="front/js/google-map.js"></script>
    <script src="front/js/main.js"></script>
    <!-- Script End -->
    @stack('scripts')
</body>

</html>
