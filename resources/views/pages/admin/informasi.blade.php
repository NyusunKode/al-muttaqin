@extends('layouts.dashboard-master')

@section('title', 'Registrasi')

@section('style')
@endsection

@section('container')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ticket List</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Ticket List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="float-right">
                    <a class="btn btn-primary" href="">Tambah</a>
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
                            <h4 class="card-title mx-3">Data</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap datatable w-100">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Title</th>
                                        <th>ID</th>
                                        <th>Product</th>
                                        <th>Created by</th>
                                        <th>Date</th>
                                        <th>Agent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-light-warning">In Progress</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Elegant
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">276377</a></td>
                                        <td>Elegant Admin</td>
                                        <td>Eric Pratt</td>
                                        <td>2018/05/01</td>
                                        <td>Fazz</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-danger">Closed</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">AdminX
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1234251</a></td>
                                        <td>AdminX Admin</td>
                                        <td>Nirav Joshi</td>
                                        <td>2018/05/11</td>
                                        <td>Steve</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-success">Opened</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Admin-Pro
                                                Theme Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1020345</a></td>
                                        <td>Admin-Pro</td>
                                        <td>Vishal Bhatt</td>
                                        <td>2018/04/01</td>
                                        <td>John</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-warning">In Progress</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Elegant
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">7810203</a></td>
                                        <td>Elegant Admin</td>
                                        <td>Eric Pratt</td>
                                        <td>2018/01/01</td>
                                        <td>Fazz</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-warning">In Progress</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">AdminX
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">2103450</a></td>
                                        <td>AdminX Admin</td>
                                        <td>Nirav Joshi</td>
                                        <td>2018/05/01</td>
                                        <td>John</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-warning">In Progress</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Admin-Pro
                                                Theme Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">2140530</a></td>
                                        <td>Admin-Pro</td>
                                        <td>Vishal Bhatt</td>
                                        <td>2018/07/01</td>
                                        <td>Steve</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-success">Opened</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Elegant
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">4500123</a></td>
                                        <td>Elegant Admin</td>
                                        <td>Eric Pratt</td>
                                        <td>2018/05/10</td>
                                        <td>Fazz</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-danger">Closed</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Elegant
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1230450</a></td>
                                        <td>Elegant Admin</td>
                                        <td>Eric Pratt</td>
                                        <td>2018/05/14</td>
                                        <td>John</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-danger">Closed</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">AdminX
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1240503</a></td>
                                        <td>AdminX Admin</td>
                                        <td>Nirav Joshi</td>
                                        <td>2018/02/01</td>
                                        <td>Steve</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-success">Opened</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Admin-Pro
                                                Theme Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1250304</a></td>
                                        <td>Admin-Pro</td>
                                        <td>Vishal Bhatt</td>
                                        <td>2018/05/21</td>
                                        <td>Fazz</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-success">Opened</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Elegant
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1470250</a></td>
                                        <td>Elegant Admin</td>
                                        <td>Eric Pratt</td>
                                        <td>2018/05/11</td>
                                        <td>John</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-danger">Closed</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">Admin-Pro
                                                Theme Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1450023</a></td>
                                        <td>Admin-Pro</td>
                                        <td>Vishal Bhatt</td>
                                        <td>2018/05/13</td>
                                        <td>Steve</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light-warning">In Progress</span></td>
                                        <td><a href="javascript:void(0)" class="font-weight-medium link">AdminX
                                                Theme
                                                Side Menu Open OnClick</a></td>
                                        <td><a href="javascript:void(0)" class="font-bold link">1420530</a></td>
                                        <td>AdminX Admin</td>
                                        <td>Nirav Joshi</td>
                                        <td>2018/10/01</td>
                                        <td>Fazz</td>
                                    </tr>
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
