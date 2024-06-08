@extends('layouts.home-master')
@section('title', 'Tenaga Pendidik')
@section('style')
    <style>
    </style>
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Tenaga Pendidik</h1>
            <p>
                Selamat datang di TPA Al-Muttaqin, tempat di mana pendidikan agama Islam dan pembentukan karakter mulia bagi
                anak-anak menjadi prioritas utama kami. TPA Al-Muttaqin berdedikasi untuk menyediakan lingkungan yang aman,
                mendukung, dan inspiratif bagi anak-anak untuk belajar dan tumbuh dalam iman Islam.
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/visi">Teacher</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <section id="features" class="features section">
        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tim Pengurus</h3>
                    <p class="fst-italic">
                        Kepala Unit TPA Al-Muttaqin dijabat oleh Sukyah, yang memimpin dengan dedikasi dan komitmen tinggi. Posisi Wakil Kepala Unit diemban oleh Suhermin, yang membantu dalam menjalankan berbagai tugas kepemimpinan dan administratif. Keuangan unit dikelola oleh Bendahara kami, Heni Rahmawati, yang bertanggung jawab atas semua aspek keuangan dengan teliti dan transparan. Untuk bidang Tata Usaha dan Administrasi, Norma Indriyani Susanti, S.Pd, mengambil peran penting dalam mengelola administrasi dan memastikan kelancaran operasional unit dengan keahlian dan profesionalismenya.
                    </p>
                    {{-- <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                8 orang ustadzah yang bersertifikat dan berpengalaman.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                Ustadzah dibekali ilmu dan latihan pada lembaga BKPRMI di setiap bulannya.
                            </span>
                        </li>
                    </ul> --}}
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Tim Pengajar</h3>
                    <p class="fst-italic">
                        Di TPA Al-Muttaqin, kami berkomitmen untuk memberikan pendidikan Al-Quran yang berkualitas dan membentuk karakter mulia pada setiap anak didik kami. Kami didukung oleh tim pengajar yang berdedikasi dan berpengalaman, yaitu Winarsih, Suhermin, Sukyah, Heni Rahmawati, Suparti, Atin Surtini, Norma Indriyani Susanti, S.Pd, Kiptiyah, dan Siti Aminah. Setiap pengajar kami memiliki keahlian dan passion dalam mendidik, memastikan bahwa setiap anak menerima perhatian dan bimbingan yang mereka butuhkan untuk berkembang baik secara spiritual maupun intelektual. Winarsih, Suhermin, dan Sukyah terkenal karena metode pengajaran mereka yang inovatif dan interaktif. Heni Rahmawati dan Suparti selalu membawa semangat baru dalam setiap sesi pembelajaran. Atin Surtini dan Norma Indriyani Susanti, S.Pd, memberikan kontribusi besar dengan latar belakang akademis yang kuat, sementara Kiptiyah dan Siti Aminah selalu memberikan perhatian khusus pada pengembangan karakter dan akhlak mulia. Dengan tim pengajar ini, kami yakin dapat menciptakan lingkungan belajar yang kondusif dan inspiratif bagi semua siswa kami.
                    </p>
                    {{-- <p>
                        Sebagai upaya meningkatkan kualitas, dan mutu pembelajaran, di TK TPA AL-MUTTAQIN telah memiliki
                        fasilitas pendidikan yang dapat mendukung kegiatan belajar dan mengajar, baik akademik maupun non
                        akademik.
                    </p> --}}
                </div>
            </div><!-- Features Item -->

    </section><!-- /Features Section -->

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
