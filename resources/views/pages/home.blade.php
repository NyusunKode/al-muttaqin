@extends('layouts.home-master')
@section('title', 'Home')
@section('style')
@endsection

@section('container')
    <!-- Hero Section -->
    <section id="hero" class="hero section" style="height: 100vh">

        <img src="assets/img/world-dotted-map.png" alt="" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">
                        Selamat Datang di Website TK TPA AL MUTTAQIN UNIT 062
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Jalan PDAM Km 12 Rt 18 Karang-Joang, Balikpapan Utara
                    </p>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets/img/poster.png') }}" class="img-fluid mb-lg-0" alt="hero" width="100%">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-book"></i></div>
                    <div>
                        <h4 class="title">
                            Mengajarkan Anak-Anak Agar Mampu Membaca Alquran
                        </h4>
                        <p class="description">
                            Fungsi dan tujuan yang pertama dari dibentuknya Taman Pendidikan Alquran adalah untuk
                            mengajarkan anak-anak agar mampu membaca Alquran. Membaca Alquran merupakan salah satu
                            pembelajaran utama yang akan didapat ketika anak-anak mengenyam pendidikan di Taman Pendidikan
                            Alquran.
                        </p>
                        <a href="#" class="readmore stretched-link">
                            <span>Lihat selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-pen"></i></div>
                    <div>
                        <h4 class="title">
                            Mengajarkan Anak-Anak Agar Mampu Menulis Alquran
                        </h4>
                        <p class="description">
                            Selain bertujuan untuk mengajarkan anak-anak mampu membaca Alquran, Taman Pendidikan Alquran
                            juga bertujuan agar anak-anak mampu menulis Alquran. Tentunya yang dimaksud disini bukanlah
                            menuliskan mushaf Alquran secara keseluruhan, akan tetapi para santri siswa siswi yang mengenyam
                            pendidikan di Taman Pendidikan Alquran dapat dan memiliki kemampuan untuk menulis huruf hijaiyah
                            arab.
                        </p>
                        <a href="#" class="readmore stretched-link">
                            <span>Lihat selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-brain"></i></div>
                    <div>
                        <h4 class="title">
                            Melatih Kemampuan Menghafal Alquran
                        </h4>
                        <p class="description">
                            Tujuan Taman Pendidikan Alquran selanjunya adalah untuk melatih kemampuan anak-anak dalam
                            menghafal Alquran. Dalam hal kategori menghafal Alquran, lazimnya pelajaran hafalan yang
                            diberikan di Taman Pendidikan Alquran adalah hafalan surat surat pada juz amma, doa sehari hari
                            serta bacaan sholat.
                        </p>
                        <a href="#" class="readmore stretched-link">
                            <span>Lihat selengkapnya</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/img/BANTPA.png') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang TPA</h3>
                    <p>
                        Taman Pendidikan Al-Qur'an (disingkat TPA atau TPQ) merupakan lembaga atau kelompok masyarakat yang
                        menyelenggarakan pendidikan nonformal jenis keagamaan Islam yang bertujuan untuk memberikan
                        pengajaran membaca Al-Qur'an sejak usia dini, serta memahami dasar-dasar dinul Islam pada anak usia
                        taman kanak-kanak, sekolah dasar dan atau madrasah ibtidaiyah (SD/MI) atau bahkan yang lebih tinggi.
                    </p>
                    <ul>
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

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Media dan Informasi<br></span>
            <h2>Media dan Informasi</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($informasi as $informasi)
                    <div class="col-lg-4 col-md-6 h-100" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <a href="/detail-informasi/{{ $informasi->id }}">
                                    <img src="{{ asset('storage/' . $informasi->thumbnail) }}" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                            <h3>{{ $informasi->judul }}</h3>
                            <p>
                                {{ substr($informasi->isi, 0, 150) }}{{ strlen($informasi->isi) > 150 ? '...' : '' }}
                            </p>
                            <a href="/detail-information/{{ $informasi->id }}" class="btn btn-primary m-2 text-white">
                                Read More
                            </a>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach
            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Daftarkan anak anda sekarang juga</h3>
                        <p>
                            TK TPA AL-MUTTAQIN UNIT 062 BALIKPAPAN UTARA menerima pendaftaran santri baru tahun ajaran
                            2024/2025. Unggul dan Islami dalam Mewujudkan Masyarakat yang Berkeadaban "|Membaca
                            Alquran|Menulis Alquran|Menghafal Alquran|Mengamalkan Kandungan Alquran|"
                        </p>
                        <a class="btn btn-primary" href="/registration">Daftar</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('assets/img/full tpa.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tenaga Pendidik</h3>
                    <p class="fst-italic">
                        adalah istilah dalam bahasa Indonesia yang merujuk kepada seorang guru atau pengajar agama Islam
                        yang bertugas mengajar ilmu agama Islam kepada murid-muridnya, biasanya dalam konteks pengajaran
                        Al-Qur'an, hadis, tafsir, dan ajaran-ajaran agama Islam lainnya.
                    </p>
                    <ul>
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
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/img/parkiran.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Sarana dan Prasarana</h3>
                    <p class="fst-italic">
                        Ruang Kelas Menyenangkan, Sarana Ibadah Yang Terhubung dengan Masjid AL-MUTTAQIN
                    </p>
                    <p>
                        Sebagai upaya meningkatkan kualitas, dan mutu pembelajaran, di TK TPA AL-MUTTAQIN telah memiliki
                        fasilitas pendidikan yang dapat mendukung kegiatan belajar dan mengajar, baik akademik maupun non
                        akademik.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-3 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('assets/img/struktur organisasi.png') }}" class="img-fluid text-center"
                        alt="struktur-organisasi">
                </div>
                <div class="col-md-9" data-aos="fade-up">
                    <h3>Struktur Organisasi</h3>
                    <p>
                        Struktur Pengurus pada Taman Pendidikan Al-Quran Al-Muttaqin unit 062
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad
                                fugiat</span>.</li>
                    </ul>
                </div>
            </div><!-- Features Item -->
        </div>

    </section><!-- /Features Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Sarana dan Prasarana</span>
            <h2>Sarana dan Prasarana</h2>
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

    </section><!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Suparti</h3>
                            <h4>Guru</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                    quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                    irure amet legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                    quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                    quis sint minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                    quem dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                    noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                    esse veniam culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Tanya Kami</span>
            <h2>Tanya Kami</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-container">
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara mendaftarkan calon santri secara Online?</h3>
                            <div class="faq-content">
                                <p>
                                    Orang Tua dapat mengakses website TK TPA AL-MUTTAQIN dengan bertanya pada
                                    ustadzah/guru ngaji.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Syarat apa saja yang di perlukan untuk mendaftarkan anak saya ke TK TPA AL-MUTTAQIN?</h3>
                            <div class="faq-content">
                                <p>
                                    Dokumen yang di perlukan adalah:
                                    - Scan KK
                                    - Scan Akte Kelahiran
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apa saja yang di pelajari selama menempuh pendidikan di TK TPA AL-MUTTAQIN?</h3>
                            <div class="faq-content">
                                <p>
                                    Santri akan mendapatkan pelajaran berupa: Membaca Al-Quran, Menghafal Surah,
                                    Menulis Huruf Hijaiyah, Belajar Sejarah Islam, Belajar Ilmu Tajwid dan Wisuda
                                    Munaqosyah.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Fasilitas apa saja yang ada di TPA AL-MUTTAQIN?</h3>
                            <div class="faq-content">
                                <p>
                                    Terdapat Masjid, Area Parkir dan Kamar Mandi yang berada di area TPA
                                    AL-MUTTAQIN.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
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
