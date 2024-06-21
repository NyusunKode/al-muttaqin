@extends('layouts.dashboard-master')
@section('title', 'Dashboard Ortu')
@section('style')
@endsection

@section('container')
    <div class="page-breadcrumb">

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="card-title mx-3">Data Anak</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap datatable w-100">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Orang Tua</th>
                                        <th class="text-center">Nama Calon Santri</th>
                                        <th class="text-center">Nomor Whatsapp</th>
                                        <th class="text-center">Alamat Orang Tua</th>
                                        <th class="text-center">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registration as $index => $item)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            {{-- <td class="text-center">{{ $item->id }}</td> --}}
                                            <td class="text-center">{{ $item->user->name }}</td>
                                            <td class="text-center">{{ $item->nama_lengkap_anak }}</td>
                                            <td class="text-center">{{ $item->user->no_telp }}</td>
                                            <td class="text-center">{{ $item->alamat_ortu }}</td>
                                            <td class="text-center">
                                                <div class="dropdown sub-dropdown">
                                                    <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i data-feather="chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                        <a href="/detail-registrasi/{{ $item->id }}" class="dropdown-item">
                                                            <i class="text-primary" data-feather="search"></i> Lihat

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
