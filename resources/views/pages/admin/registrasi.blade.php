@extends('layouts.dashboard-master')

@section('title', 'Registrasi')

@section('style')
@endsection

@section('container')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Registrasi</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            {{-- <li class="breadcrumb-item"><a href="index.html" class="text-muted">Admin</a></li> --}}
                            <li class="breadcrumb-item text-muted active" aria-current="page">Daftar Registrasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="card-title mx-3">Data Calon Santri</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap datatable w-100">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Nama Orang Tua</th>
                                        <th class="text-center">Nama Calon Santri</th>
                                        <th class="text-center">Nomor Whatsapp</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registration as $registration)
                                        <tr>
                                            <td class="text-center">{{ $registration->id }}</td>
                                            <td class="text-center">{{ $registration->nama_ortu }}</td>
                                            <td class="text-center">{{ $registration->nama_anak }}</td>
                                            <td class="text-center">{{ $registration->nomor_wa }}</td>
                                            <td class="text-center">
                                                <div class="dropdown sub-dropdown">
                                                    <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="text-success" data-feather="check"></i> Konfirmasi
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="text-danger" data-feather="x"></i> Tolak
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
