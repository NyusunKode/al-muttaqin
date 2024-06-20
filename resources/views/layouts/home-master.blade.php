<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title') | Al-Muttaqin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">TPA AL MUTTAQIN</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="nav-link">Beranda<br></a></li>
                    <li class="dropdown">
                        <a href="#" class="tentang-kami-link"><span>Tentang Kami</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="/visi" class="nav-link">Visi dan Misi</a></li>
                            <li><a href="/histori" class="nav-link">Sejarah Singkat</a></li>
                            <li><a href="/teacher" class="nav-link">Tenaga Pendidik</a></li>
                        </ul>
                    </li>
                    <li><a href="/information" class="nav-link">Media dan Informasi</a></li>
                    <li><a href="/facilities" class="nav-link">Sarana dan Prasarana</a></li>
                    <li><a href="/contact" class="nav-link">Kontak</a></li>
                    <li><a href="/registration" class="nav-link">Daftar</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="/login">Login</a>

        </div>
    </header>

    <main class="main">
        @yield('container')
    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">TPA AL MUTTAQIN</span>
                    </a>
                    <p>Unggul dan Islami dalam Mewujudkan Masyarakat yang Berkeadaban</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Klik Cepat</h4>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/information">Media dan Informasi</a></li>
                        <li><a href="/facilities">Sarana dan Prasarana</a></li>
                        <li><a href="/contact">Kontak</a></li>
                        <li><a href="/registration">Daftar</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Tentang Kami</h4>
                    <ul>
                        <li><a href="/visi">Visi dan Misi</a></li>
                        <li><a href="/histori">Sejarah Singkat</a></li>
                        <li><a href="/teacher">Tenaga Pendidik</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak</h4>
                    <p>Jalan PDAM Km 12 Rt 18
                        Karang Joang, Balikpapan Utara
                        Indonesia</p>
                    <p class="mt-4"><strong>Whatsapp:</strong> <span>0852 4650 6780</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">TK TPA AL MUTTAQIN UNIT 062.</strong> <span>All
                    Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentUrl = window.location.pathname;
            var navLinks = document.querySelectorAll('.nav-link');
            var tentangKamiLink = document.querySelector('.tentang-kami-link');
            var tentangKamiPages = ['/visi', '/histori', '/teacher'];

            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                }
            });

            // Check if the current URL is one of the Tentang Kami pages
            if (tentangKamiPages.includes(currentUrl)) {
                tentangKamiLink.classList.add('active');
            }
        });
    </script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('script')
</body>

</html>
