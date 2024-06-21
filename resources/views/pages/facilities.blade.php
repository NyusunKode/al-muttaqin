@extends('layouts.home-master')
@section('title', 'Sarana dan Prasana')
@section('style')
    <style>
    </style>
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Sarana dan Prasana</h1>
            <p>
                Selamat datang di TPA Al-Muttaqin, tempat di mana pendidikan agama Islam dan pembentukan karakter mulia bagi
                anak-anak menjadi prioritas utama kami. TPA Al-Muttaqin berdedikasi untuk menyediakan lingkungan yang aman,
                mendukung, dan inspiratif bagi anak-anak untuk belajar dan tumbuh dalam iman Islam.
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/visi">Facilities and Infrastructure</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h5 class="py-4">
                Sebagai upaya meningkatkan kualitas, dan mutu pembelajaran, di TK TPA AL-MUTTAQIN telah
                memiliki
                fasilitas pendidikan yang dapat mendukung kegiatan belajar dan mengajar, baik akademik maupun non
                akademik.
            </h5>
            <h5 class="py-4">
                Maka kami Menyediakan beberapa fasilitas mulai dari :
            </h5>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item featured">
                        <h3>1 Ruangan Kelas Mengaji</h3>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Ruangan kelas yang menarik</span></li>
                            <li><i class="bi bi-check"></i> <span>Dilengkapi meja yang banyak</span></li>
                            <li><i class="bi bi-check"></i> <span>Memastikan ruangan mengaji bersih dan
                                    tidak kotor</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item featured">
                        <h3>Masjid Al-Muttaqin</h3>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Beberapa kelas atau juz al-quran berada
                                    di area masjid</span></li>
                            <li><i class="bi bi-check"></i> <span>Melakukan kegiatan praktek shalat dan
                                    kegiatan keislama lainnya di area masjid</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item featured">
                        <h3>1 Ruangan Kamar Mandi</h3>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kamar Mandi yang bersih</span></li>
                            <li><i class="bi bi-check"></i> <span>Memastikan kamar mandi terpisah
                                    dengan kamar mandi masjid</span></li>
                            <li><i class="bi bi-check"></i> <span>Guru memastikan setiap sebulan sekali
                                    membersihkan lingkungan area TPA</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->


            </div>

        </div>

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
