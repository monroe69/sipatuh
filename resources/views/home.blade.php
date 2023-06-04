{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')
@section('tittle')
    K3L
@endsection
@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Kinerja</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
             
                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        @can('is_user')
                        <!-- sales card -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="{{ route('k3') }}">
                                    <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>K3</h4>
                                        <p class="text-body mt-1 mb-0">
                                            memberikan laporan tentang keselamatan dan kesehatan kerja
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="{{ route('lingkungan') }}">
                                    <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Lingkungan</h4>
                                        <p class="text-body mt-1 mb-0">
                                            memberikan laporan tentang lingkungan
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                   <a href="{{ route('keamanan') }}">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>keamanan</h4>
                                        <p class="text-body mt-1 mb-0">memberikan laporan tentang keamanan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
            @can('is_admin')
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                   <a href="{{ route('user') }}">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>buat akun user</h4>
                                        <p class="text-body mt-1 mb-0">membuat akun user</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                   <a href="/dashboardk3">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>K3</h4>
                                        <p class="text-body mt-1 mb-0">memriksa laporan kinerja K3</p>
                                    </div>
                                </a>
                            </div>
                        </div>
            @endcan
                     
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>    
@endsection
