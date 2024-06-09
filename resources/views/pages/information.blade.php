@extends('layouts.home-master')
@section('title', 'Media dan Informasi')
@section('style')
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
