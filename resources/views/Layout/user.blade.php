<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT WIJAYA PLYWOOD INDONESIA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('webwijaya/assets/img/wijaya/logoo.png') }}" rel="icon">
    <link href="{{ asset('webwijaya/assets/img/wijaya/logoo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('webwijaya/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('webwijaya/assets/css/main.css') }}" rel="stylesheet">


    <!-- =======================================================
    * Template Name: UpConstruction - v1.3.0
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
   @yield('header')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>PT WIJAYA PLYWOOD INDONESIA</h3>
                            <p>
                                Jalan Doktor Wahidin No.31 Krajan, RT.02/RW.01, Kalirejo, Kec. Lawang, Kabupaten Malang,
                                Jawa Timur 65215<br><br>
                                <strong>Telepon:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> wijaya@gmail.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    @auth
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/about">Tentang kami</a></li>
                            <li><a href="/loker">Lowongan Kerja</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                            <li><a href="/profileuser">Profile</a></li>
                            <li>  <a href="/logout" style="color: white;" class="header-widget" title="My Account"><img
                                src="{{asset('foto/'. Auth::user()->foto)}}"" alt="user" /><span style="color: white">Logout</span></a></li>
                        </ul>
                    </div><!-- End footer links column-->
                    @else
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/about">Tentang kami</a></li>
                            <li><a href="/loker">Lowongan Kerja</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                            <li><a href="/profileuser">Profile</a></li>
                            <li><a href="/login" style="color: white;" class="header-widget" title="My Account"><img
                                src="{{ asset('logo/user.png') }}" alt="user" /><span style="color: white">Login</span></a></li>
                        </ul>
                    </div><!-- End footer links column-->
                    @endauth
                    

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Kebijakan</h4>
                        <ul>
                            <li><a href="/snk">Kebijakan Privasi</a></li>
                            <li><a href="/faq">Syarat dan Ketentuan</a></li>
                        </ul>
                    </div><!-- End footer links column-->
                    <div class="col-lg-4 col-md-6">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Jumat: 09:00 - 17:00<br>Sabtu: 10:00 - 14:00<br>Minggu: Tutup</p>
                    </div><!-- End hours column-->



                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT Wijaya Plywood Indonesia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('webwijaya/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('webwijaya/assets/js/main.js') }}"></script>

</body>

</html>
