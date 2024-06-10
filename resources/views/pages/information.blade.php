@extends('layouts.home-master')
@section('title', 'Media dan Informasi')
@section('style')
@endsection

@section('container')

    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Media dan Informasi</h1>
            <p>
                Selamat datang di TPA Al-Muttaqin, tempat di mana informasi dan media berkualitas tentang pendidikan agama
                Islam dan pembentukan karakter mulia bagi anak-anak kami sajikan. TPA Al-Muttaqin berkomitmen menyajikan
                berita dan informasi terkini seputar dunia pendidikan Islam, serta konten multimedia yang mendukung proses
                belajar mengajar dengan lebih interaktif dan menarik.
            </p>
        </div>
    </div><!-- End Page Title -->
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Informasi Terkini<br></span>
        <h2>Informasi Terkini</h2>
    </div><!-- End Section Title -->

    <div class="container mb-8">

        <div class="row gy-4">
            @foreach ($informasi as $informasi)
                <div class="col-lg-4 col-md-6 h-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $informasi->thumbnail) }}" alt="" class="img-fluid">
                        </div>
                        <h3>{{ $informasi->judul }}</h3>
                        <p>{{ $informasi->isi }}</p>
                    </div>
                </div><!-- End Card Item -->
            @endforeach
        </div>

    </div>

    </section><!-- /Services Section -->
@endsection

@section('script')
@endsection
