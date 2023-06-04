@extends('k3::layouts.table')
@section('content')
{{-- leadership --}}
<div class="app-content content ">
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h4 class="content-header-title float-start mb-0">Data K3</h4>
                            
                        </div>
                    </div>
                </div>
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                            <h4 class="col-12">Leadership & Management Commitment</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $leaderships as $leadership )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $leadership->no_kriteria }}</td>
                                            <td class="text-center">{{ $leadership->sub_kriteria }}</td>
                                            <td>{{ $leadership->level }}</td>
                                            <td> 
                                                 <a href="/K3/rkap/{{ $leadership->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $leadership->catatan }}</td>
                                        <td>
                                                @if ($leadership->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($leadership->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($leadership->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($leadership->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($leadership->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td>
                                                
                                                <form action="/K3/rkap/{{ $leadership->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/rkap/{{ $leadership->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                        {{-- <button type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="file"></span></button> --}}
                                                    </form>
                                                                    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                            </section>
                            {{-- audit --}}
                   <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Audit, Assessment and Inspection</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $audits as $audit )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $audit->no_kriteria }}</td>
                                            <td class="text-center">{{ $audit->sub_kriteria }}</td>
                                            <td>{{ $audit->level }}</td>
                                            <td> 
                                                 <a href="/K3/audittable/{{ $audit->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $audit->catatan }}</td>
                                        <td>
                                                @if ($audit->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($audit->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($audit->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($audit->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($audit->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td>

                                                    <form action="/K3/audittable/{{ $audit->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/audittable/{{ $audit->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                    </form>
                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
                {{-- penerapan --}}
                   <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                            <h4 class="col-12">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $penerapans as $penerapan )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $penerapan->no_kriteria }}</td>
                                            <td class="text-center">{{ $penerapan->sub_kriteria }}</td>
                                            <td>{{ $penerapan->level }}</td>
                                            <td> 
                                                 <a href="/K3/penerapantable/{{ $penerapan->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $penerapan->catatan }}</td>
                                        <td >
                                                @if ($penerapan->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($penerapan->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($penerapan->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($penerapan->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($penerapan->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">

                                                    <form action="/K3/penerapantable/{{ $penerapan->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/penerapantable/{{ $penerapan->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                    </form>
                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
                {{-- safeti --}}
                   <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                            <h4 class="col-12">Safety Training and Education</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $safetis as $safeti )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $safeti->no_kriteria }}</td>
                                            <td class="text-center">{{ $safeti->sub_kriteria }}</td>
                                            <td>{{ $safeti->level }}</td>
                                            <td> 
                                                 <a href="/K3/safetitable/{{ $safeti->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $safeti->catatan }}</td>
                                        <td >
                                                @if ($safeti->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($safeti->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($safeti->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($safeti->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($safeti->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">

                                                    <form action="/K3/safetitable/{{ $safeti->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/safetitable/{{ $safeti->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                    </form>
                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
                {{-- comunication --}}
                   <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                            <h4 class="col-12">Safety Campaign and Communication</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $comunications as $comunication )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $comunication->no_kriteria }}</td>
                                            <td class="text-center">{{ $comunication->sub_kriteria }}</td>
                                            <td>{{ $comunication->level }}</td>
                                            <td> 
                                                 <a href="/K3/comunicationtable/{{ $comunication->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $comunication->catatan }}</td>
                                        <td >
                                                @if ($comunication->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($comunication->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($comunication->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($comunication->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($comunication->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">

                                                    <form action="/K3/comunicationtable/{{ $comunication->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/comunicationtable/{{ $comunication->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                    </form>
                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
                 {{-- Reporting --}}
                   <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                            <h4 class="col-12">Reporting</h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $reportings as $reporting )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $reporting->no_kriteria }}</td>
                                            <td class="text-center">{{ $reporting->sub_kriteria }}</td>
                                            <td>{{ $reporting->level }}</td>
                                            <td> 
                                                 <a href="/K3/reportingtable/{{ $reporting->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $reporting->catatan }}</td>
                                        <td >
                                                @if ($reporting->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($reporting->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($reporting->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($reporting->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($reporting->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">

                                                    <form action="/K3/reportingtable/{{ $reporting->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="" method="" class="d-inline">
                                                    <button class="badge bg-light text-dark border-0">
                                                        Or
                                                    </button>
                                                </form>
                                                    <form action="/K3/reportingtable/{{ $reporting->id }}/edit" method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf
                                                        
                                                        <button class="badge bg-primary border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span data-feather="edit"></span></button>
                                                    </form>
                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
            </div>
        </div>
    </div>
@endsection