@extends('tablelay.table')
@section('tittle')
    UPDL BOGOR
@endsection
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
                            <h2 class="content-header-title float-start mb-0">DataK3</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                             <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="{{ route('cetakpdfbogor') }}" target="blank"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Cetak Pdf</span></a>
                                <a class="dropdown-item" href="/rekapdatabogor" target="blank"><i class="me-1" data-feather="check-square" ></i><span class="align-middle">Generated Level</span></a>
                                {{-- <a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a>
                                <a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a> --}}
                            </div>
                            {{-- <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="{{ route('cetakpdfbogor') }}"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Cetak Pdf</span></a></div> --}}
                            {{-- <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Rekap data</span></a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
{{-- <a href="{{ route('cetakpdfbogor') }}" class="btn btn-outline-primary" id="type-update"
onclick="return confirm('Apakah anda yakin ingin mengedit data?')"target="blank">Simpan</a> --}}
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
                                        <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $leaderships as $leadership )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $leadership->no_kriteria }}</td>
                                            <td class="text-center">{{ $leadership->divisi }}</td>
                                            <td class="text-center">{{ $leadership->sub_kriteria }}</td>
                                            <td class="text-center">{{ $leadership->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $leadership->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $leadership->catatan }}</td>
                                        <td class="text-center">
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $audits as $audit )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $audit->no_kriteria }}</td>
                                            <td class="text-center">{{ $audit->divisi }}</td>
                                            <td class="text-center">{{ $audit->sub_kriteria }}</td>
                                            <td class="text-center">{{ $audit->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/auditdiajukan/{{ $audit->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $audit->catatan }}</td>
                                        <td class="text-center"> 
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
                                           <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $penerapans as $penerapan )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $penerapan->no_kriteria }}</td>
                                            <td class="text-center">{{ $penerapan->no_divisi }}</td>
                                            <td class="text-center">{{ $penerapan->sub_kriteria }}</td>
                                            <td class="text-center">{{ $penerapan->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/penerapan/{{ $penerapan->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $penerapan->catatan }}</td>
                                        <td class="text-center">
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
                                         <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $safetis as $safeti )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $safeti->no_kriteria }}</td>
                                            <td class="text-center">{{ $safeti->divisi }}</td>
                                            <td class="text-center">{{ $safeti->sub_kriteria }}</td>
                                            <td class="text-center">{{ $safeti->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/safeti/{{ $safeti->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $safeti->catatan }}</td>
                                        <td class="text-center">
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
                                           <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $comunications as $comunication )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $comunication->no_kriteria }}</td>
                                            <td class="text-center">{{ $comunication->divisi }}</td>
                                            <td class="text-center">{{ $comunication->sub_kriteria }}</td>
                                            <td class="text-center">{{ $comunication->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/comunication/{{ $comunication->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $comunication->catatan }}</td>
                                        <td class="text-center">
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $reportings as $reporting )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $reporting->no_kriteria }}</td>
                                            <td class="text-center">{{ $reporting->divisi }}</td>
                                            <td class="text-center">{{ $reporting->sub_kriteria }}</td>
                                            <td class="text-center">{{ $reporting->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/reporting/{{ $reporting->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td class="text-center">{{ $reporting->catatan }}</td>
                                        <td class="text-center">
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
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
      
      
            </div>
        </div>
    </div>
@endsection