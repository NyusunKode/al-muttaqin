@extends('layouts.dashboard-master')

@section('title', 'Registrasi')

@section('style')
@endsection

@section('container')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Informasi</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Tampilkan informasi</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="float-right">
                    <button type="button" data-toggle="modal" data-target="#modal-tambah" class="btn btn-primary"
                        href="">Tambah</button>
                </div>
                @include('pages.admin.modals.add-modal')
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
                            <h4 class="card-title mx-3">Data</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap datatable w-100">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">judul</th>
                                        <th class="text-center">thumbnail</th>
                                        <th class="text-center">isi</th>
                                        <th class="text-center">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informasi as $index => $item)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td class="text-center"><a href="javascript:void(0)"
                                                    class="font-weight-medium link">{{ $item->judul }}</a></td>
                                            <td class="text-center"><img height="100"
                                                    src="{{ asset('storage/' . $item->thumbnail) }}" alt=""></td>
                                            <td class="text-center">{{ $item->isi }}</td>
                                            <td class="text-center">
                                                <div class="dropdown sub-dropdown">
                                                    <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-edit-{{ $item->id }}"
                                                            class="dropdown-item" href="#">
                                                            <i class="text-success" data-feather="edit-2"></i> edit
                                                        </button>
                                                        <form action="{{ url('/informasi/delete/' . $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="dropdown-item" href="#">
                                                                <i class="text-danger" data-feather="trash"></i> hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @extends('pages.admin.modals.edit-modal')
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
