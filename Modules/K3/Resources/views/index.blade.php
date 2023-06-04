{{-- @extends('k3::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('k3.name') !!}
    </p>
@endsection --}}

@extends('k3::layouts.master')
@section('tittle')
    K3
@endsection
@section('content')
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                 <!-- Dashboard Analytics Start -->
                    <section id="dashboard-analytics">
                        <div class="row match-height">
                            <div class="row match-height">
                                <div class="content-header-left col-md-12 col-12 mb-2">
                                    <div class="row breadcrumbs-top">
                                        <h2 class="content-header-title float-start mb-0">Dashboard</h2>

                                        <!-- Pengajuan diproses start -->
                                        <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                            <div class="card">
                                                <div class="card-header flex-column align-items-start pb-0 ">
                                                    <div class="avatar bg-light-warning p-50 m-0">
                                                        <div class="avatar-content">
                                                            <i data-feather="activity" class="font-medium-5"></i>
                                                        </div>
                                                    </div>
                                                    <h2 class="fw-bolder mt-1">34</h2>
                                                    <p class="card-text mb-2">Pengajuan di proses</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pengajuan diproses ends -->


                                        <!-- Pengajuan ditolak starts -->
                                        <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                            <div class="card">
                                                <div class="card-header flex-column align-items-start pb-0">
                                                    <div class="avatar bg-light-danger p-50 m-0">
                                                        <div class="avatar-content">
                                                            <i data-feather="x-circle" class="font-medium-5"></i>
                                                        </div>
                                                    </div>
                                                    <h2 class="fw-bolder mt-1">22</h2>
                                                    <p class="card-text mb-2">Pengajuan ditolak</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pengajuan ditolak ends -->

                                        <!-- Pengajuan Selesai starts -->
                                        <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                            <div class="card">
                                                <div class="card-header flex-column align-items-start pb-0">
                                                    <div class="avatar bg-light-success p-50 m-0">
                                                        <div class="avatar-content">
                                                            <i data-feather="check-circle" class="font-medium-5"></i>
                                                        </div>
                                                    </div>
                                                    <h2 class="fw-bolder mt-1">78</h2>
                                                    <p class="card-text mb-2">Pengajuan Selesai</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pengajuan Selesai ends -->

                                        <!-- Total Pengajuan starts -->
                                        <div class="col-lg-2 col-sm mt-2">
                                            <div class="card ">
                                                <div class="card-header flex-column align-items-start pb-0">
                                                    <div class="avatar bg-light-primary p-50 m-0">
                                                        <div class="avatar-content">
                                                            <i data-feather="circle" class="font-medium-5"></i>
                                                        </div>
                                                    </div>
                                                    <h2 class="fw-bolder mt-1">250</h2>
                                                    <p class="card-text mb-2">Total Pengajuan</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Total Pengajuan ends -->

                                        <!-- kekurangan start -->
                                        <div class="col-lg-4 col-sm-6 col-12 mt-2">
                                            <div class="card ">
                                                <div class="card-header flex-column align-items-start pb-0 ">
                                                    <div class="avatar bg-light-danger p-50 m-0">
                                                        <div class="avatar-content">
                                                            <i data-feather="alert-triangle" class="font-medium-5"></i>
                                                        </div>
                                                    </div>
                                                    <h2 class="fw-bolder mt-1">12</h2>
                                                    <p class="card-text mb-2">Pengajuan Tidak Lengkap</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- kekuranganends -->


                                        <!-- Basic table -->
                                        <div class="col-12">
                                            <h2 class="content-header-title mt-2">Pengajuan Tidak Lengkap</h2>
                                        </div>
                                        <section id="basic-datatable">
                                            <div class="row">
                                                <div class="col-12 mt-2">
                                                    <div class="card">

                                                        <table class="datatables-basic table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Keterangan</th>
                                                                    <th>Maturity level</th>
                                                                    <th>Kriteria</th>
                                                                    <th>Tanggal Upload</th>
                                                                    <th>Yang Mengajukan</th>
                                                                    <th>Kekurangan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Biaya Pulsa</td>
                                                                    <td>1123</td>
                                                                    <td>Marcella</td>
                                                                    <td>22 Juli 2022</td>
                                                                    <td>Staff operasional</td>
                                                                    <td>file lampiran</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
@endsection