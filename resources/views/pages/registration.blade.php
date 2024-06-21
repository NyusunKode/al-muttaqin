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

                    <form action="/register" method="POST" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div id="step1" class="row gy-3">
                            <h4 class="mb-3">Formulir Pendaftaran</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Nama Orang Tua <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir_ortu">Tanggal Lahir Orang Tua <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tempat_lahir_ortu">Tempat Lahir Orang Tua <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pendidikan_ortu">Pendidikan Orang Tua <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="pendidikan_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pekerjaan_ortu">Pekerjaan Orang Tua <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="pekerjaan_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat_ortu">Alamat Orang Tua <span class="text-danger">*</span></label>
                                    <input type="text" name="alamat_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_telp">Nomor Whatsapp <span class="text-danger">*</span></label>
                                    <input type="number" name="no_telp" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_lengkap_anak">Nama Lengkap Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nama_lengkap_anak" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_panggilan_anak">Nama Panggilan Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nama_panggilan_anak" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">NIK <span class="text-danger">*</span></label>
                                    <input type="number" name="nik" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select class="form-select" name="jenis_kelamin" required
                                        onchange="toggleTemplate(this)">
                                        <option value=""></option>
                                        @foreach (\App\Models\Registrasi::getJenisKelaminOptions() as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="tempat_lahir_anak">Tempat Lahir Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir_anak" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_lahir_anak">Tanggal Lahir Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir_anak" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="anak_ke">Anak Keberapa <span class="text-danger">*</span></label>
                                    <input type="number" name="anak_ke" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pendidikan_anak">Pendidikan Anak Saat Ini <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="pendidikan_anak" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat_anak">Alamat Anak <span class="text-danger">*</span></label>
                                    <input type="text" name="alamat_anak" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary w-100" onclick="showStep2()">Next</button>
                            </div>
                        </div>

                        <div id="step2" class="row gy-3" style="display:none;">
                            <h4 class="mb-3">Daftarkan Akun</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="username">Username <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-secondary w-100 mb-3"
                                    onclick="showStep1()">Back</button>
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

        function showStep2() {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
        }

        function showStep1() {
            document.getElementById('step2').style.display = 'none';
            document.getElementById('step1').style.display = 'block';
        }
    </script>
@endsection
