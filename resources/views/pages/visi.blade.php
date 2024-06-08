@extends('layouts.home-master')
@section('title', 'Visi dan Misi')
@section('style')
    <style>
    </style>
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Visi dan Misi</h1>
            <p>
                Selamat datang di TPA Al-Muttaqin, tempat di mana pendidikan agama Islam dan pembentukan karakter mulia bagi
                anak-anak menjadi prioritas utama kami. TPA Al-Muttaqin berdedikasi untuk menyediakan lingkungan yang
                aman,mendukung, dan inspiratif bagi anak-anak untuk belajar dan tumbuh dalam iman Islam.
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/visi">Visi dan Misi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Section Title -->
    <section id="team" class="team section">
        <div class="container section-title text-center" data-aos="fade-up">
            <span>Visi</span>
            <h2>Visi</h2>
            <h5 class="py-4">“Menyiapkan generasi Qur'ani, menyongsong masa depan gemilang”</h5>
            <h6>ini tertuang dalam Ikrar Santri, yaitu:</h6>
            <h6>
                Aku santri TK/TPA AL-Qur’an BKPRMI. Demi baktiku kepada ilahi dan cintaku kepada AL-Quran suci, Aku
                berjanji:
            </h6>
            <div class="py-4 d-flex-col justify-content-center w-75" style="margin: 0 auto">
                <h6 class="py-2">" Selalu shalat di awal waktu "</h6>
                <h6 class="py-2">" Rajin mengaji setiap hari "</h6>
                <h6 class="py-2">" Berbakti kepada ayah dan ibu "</h6>
                <h6 class="py-2">" Taat dan hormat kepada guru "</h6>
                <h6 class="py-2">" Menuntut ilmu sepanjang hayat "</h6>
                <h6 class="py-2">" Sayang kawan dan suka memaafkan "</h6>
                <h6 class="py-2">" Mengabdi untuk negeri dan bermanfaat bagi umat "</h6>
            </div>

        </div><!-- End Section Title -->

        <div class="container section-title" data-aos="fade-up">
            <span>Misi<br></span>
            <h2>Misi</h2>
            <div class="py-4 d-flex-col justify-content-center w-75" style="margin: 0 auto">
                <h6 class="py-2">Mengembangkan lembaga pendidikan yang berorientasi pada Al-Quran</h6>
                <h6 class="py-2">Membina ustadz dan ustadzah menjadi model pendidik yang berakhlakul karimah</h6>
                <h6 class="py-2">Menghasilkan generasi yang mampu mengaplikasikan nilai-nilai Al-Quran</h6>
            </div>
        </div><!-- End Section Title -->
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
