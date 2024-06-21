@extends('layouts.home-master')
@section('title', 'Detail Informasi')
@section('style')
@endsection

@section('container')
    <!-- About Section -->
    <div class="page-title" data-aos="fade" style="background-image: url({{ asset('storage/' . $informasi->thumbnail) }});">
        <div class="container position-relative">
            <h1>Detail Informasi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/information">Information Media</a></li>
                    <li>{{ $informasi->judul }}</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section class="page p-0 mt-4 mb-2">
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Page Content Start ***** -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- ***** Blog Post Start ***** -->
                            <div class="col-lg-12">
                                <div class="blog-list">
                                    <div class="blog-post-thumb big mbottom-60 d-flex justify-content-between">
                                        <!-- ***** Post Top Start ***** -->
                                        <div class="blog-content">
                                            <div class="blog-text">
                                                <div class="text post-detail">
                                                    <h3 class="mb-4">
                                                        {{ $informasi->judul }}
                                                    </h3>
                                                </div>
                                                <div class="text post-detail">
                                                    <p style="text-align: justify">
                                                        {{ $informasi->isi }}
                                                    </p>
                                                </div>
                                                <ul style="list-style: none" class="post-meta mbottom-20 p-0">
                                                    <li>
                                                        <i>
                                                            published at
                                                            {{ $informasi->created_at->format('d-M-Y') }}
                                                        </i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
