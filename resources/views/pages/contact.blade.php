@extends('layouts.home-master')
@section('title', 'Kontak')
@section('style')
    <style>
    </style>
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Kontak</h1>
            <p>
                Selamat datang di TPA Al-Muttaqin, tempat di mana pendidikan agama Islam dan pembentukan karakter mulia bagi
                anak-anak menjadi prioritas utama kami. TPA Al-Muttaqin berdedikasi untuk menyediakan lingkungan yang aman,
                mendukung, dan inspiratif bagi anak-anak untuk belajar dan tumbuh dalam iman Islam.
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/visi">Contact</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="pricing" class="pricing section">
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-map"></i></div>
                        <div>
                            <h4 class="title">Alamat Kami</h4>
                            <p class="description">Alamat kami berada di Jalan PDAM Km 12, RT 18, Karang Joang,
                                Balikpapan Utara, Indonesia.</p>
                            {{-- <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-brands fa-square-whatsapp"></i></div>
                        <div>
                            <h4 class="title">Hubungi Kami</h4>
                            <p class="description">Untuk informasi lebih lanjut, silakan kirim pesan WhatsApp ke
                                nomor 0852 4650 6780.</p>
                            {{-- <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Email Kami</h4>
                            <p class="description">Untuk informasi lebih lanjut, silakan hubungi kami melalui email
                                di info@example.com.</p>
                            {{-- <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- Section Title -->
        <div class="container section-title my-0" data-aos="fade-up">
            <span>Maps</span>
            <h2 class="m-0">Maps</h2>
        </div><!-- End Section Title -->

        <section id="contact" class="contact section p-0 m-3">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 470px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.982548325534!2d116.89501147407995!3d-1.1727692355107218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14ece9b1b5bd9%3A0xc68f52798ceeab1b!2sMasjid%20Almuttaqiin!5e0!3m2!1sen!2sid!4v1717951235766!5m2!1sen!2sid"
                        frameborder="0" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section><!-- /Contact Section -->

    </section>

@endsection

@section('script')
    <script type="application/json" class="swiper-config">
        {
        "loop": true,
        "speed": 600,
        "autoplay": {
            "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
        }
        }
    </script>
@endsection
