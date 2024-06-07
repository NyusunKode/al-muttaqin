@extends('layouts.home-master')
@section('title', 'Register')
@section('style')
@endsection

@section('container')
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Pendaftaran Calon Santri</h1>
            <p>Daftarkan anak Anda sekarang juga dengan mengisi formulir di bawah ini.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Register</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jalan PDAM Km 12 Rt 18 Karang Joang, Balikpapan Utara Indonesia</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-whatsapp flex-shrink-0"></i>
                        <div>
                            <h3>Whatsapp</h3>
                            <p>+62 852 4650 6780</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    @if (session()->has('SUCCESS'))
                        <div class="alert alert-success" role="alert" id="success-alert">{{ session('SUCCESS') }}</div>
                    @endif

                    @if (session()->has('ERROR'))
                        <div class="alert alert-warning" role="alert" id="error-alert">{{ session('ERROR') }}</div>
                    @endif

                    <h4 class="mb-3">Formulir Pendaftaran</h4>

                    <form action="/register" method="POST" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <input type="text" name="nama_ortu" class="form-control" placeholder="Nama Orang Tua"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="nama_anak" class="form-control" placeholder="Nama Anak"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="number" name="nomor_wa" class="form-control" placeholder="Nomor Whatsapp"
                                    required>
                            </div>

                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary w-100" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

@section('script')
    <script>
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 2000);

        setTimeout(function() {
            var errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                errorAlert.style.display = 'none';
            }
        }, 2000);
    </script>
@endsection
