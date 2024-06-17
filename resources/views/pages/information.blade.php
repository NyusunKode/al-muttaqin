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
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="/information">Information Media</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="services" class="services section">
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

@endsection

@section('script')
@endsection
