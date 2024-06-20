@extends('layouts.home-master')
@section('title', 'Sejarah Singkat')
@section('style')
    <style>
        p {
            font-size: 13pt
        }
    </style>
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Sejarah Singkat</h1>
            <p>Selamat datang di TPA Al-Muttaqin, tempat di mana pendidikan agama Islam dan pembentukan karakter mulia bagi
                anak-anak menjadi prioritas utama kami. TPA Al-Muttaqin berdedikasi untuk menyediakan lingkungan yang aman,
                mendukung, dan inspiratif bagi anak-anak untuk belajar dan tumbuh dalam iman Islam.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/visi">History</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="services" class="services section">

        {{-- <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Sejarah Singkat<br></span>
            <h2>Sejarah Singkat</h2>
        </div><!-- End Section Title --> --}}

        <section id="about" class="about section">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ asset('assets/img/BANTPA.png') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang TKA/TPA</h3>
                        <p>
                            TPQ Al-Muttaqin Didirikan pada tahun 2005, dan berlokasi di daerah Jalan PDAM Km 12 Rt 18
                            Kelurahan Karang-Joang, Kecamatan Balikpapan Utara, Kota Balikpapan, Kalimantan Timur.
                            Pendidikan Al-Quran bagi anak usia dini dan anak-anak TKA, TPA, dan TQA menjadi salah satu
                            program utama di BKPRMI dengan LPPTKA (Lembaga Pembinaan dan Pengembangan TKA/TPQ Al-Quran)
                            sebagai ujung tombak di dalam pelaksanaannya.
                        </p>
                        <p>
                            Dengan dibekali Ustadzah yang berpendidikan dan bersertifikat maka pengajaran terhadap anak-anak
                            pasti akan berkualitas. Ustadzah yang mengajar di TPQ Al-Muttaqin terdiri dari 8 orang Ustadzah
                            dan 1 Ustadzah yang berperan sebagai admin. Untuk pendaftar santri baru tiap tahun ajaran baru
                            mencapai sekitar 100 santri. Pendaftar rata-rata berusia 5 sampai 12 tahun, orang tua
                            mendaftarkan anak mereka untuk memberikan pengajaran membaca Al-Qur'an menyiapkan Generasi
                            Qur'ani menyongsong masa depan gemilang.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>TPQ Al-Muttaqin terdiri dari 8 orang Ustadzah</h5>
                                    <p>
                                        Dengan dibekali Ustadzah yang berpendidikan dan bersertifikat maka pengajaran terhadap
                                        anak-anak pasti akan berkualitas.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Pembelajaran Efektif</h5>
                                    <p>
                                        TPA AL-MUTTAQIN memang terkenal dengan pembelajaran yang efektif, mengikuti zaman dan
                                        cenderung teliti yang sudah di terapkan kepada santri selama sejak berdirinya Taman
                                        tersebut.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Pendaftaran Online</h5>
                                    <p>
                                        Mengikuti zaman, TPA AL-MUTTAQIN mempunyai inovasi dengan melakukan pendaftaran secara
                                        online untuk calon santri baru.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div> --}}
        </section>


    </section><!-- /Services Section -->

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
