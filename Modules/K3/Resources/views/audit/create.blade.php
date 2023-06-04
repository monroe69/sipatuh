@extends('k3::layouts.form')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tambah Data</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->
                <div class="row match-height">
                    <!-- Payment Card -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card card-payment">
                            <div class="card-header">
                                <h4 class="card-title"> Audit, Assessment and Inspection</h4>
                            </div>
                            <div class="card-body">

                                <form action="/K3/audit" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <!-- full Editor start -->
                                        <div class="mb-1">
                                            <label class="form-label" for="no_kriteria">No kriteria</label>
                                            <select class="form-select" id="no_kriteria" name="no_kriteria">
                                                <option > silahkan diisi </option>
                                                <option value="2.1">2.1</option>
                                                <option value="2.2">2.2</option>
                                                <option value="2.3">2.3</option>
                                                <option value="2.4">2.4</option>
                                                <option value="2.5">2.5</option>
                                                <option value="2.6">2.6</option>

                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="sub_kriteria">sub kriteria</label>
                                            <select class="form-select" id="sub_kriteria" name="sub_kriteria">
                                                <option>silahkan isi sub kriteria</option>
                                                <option value="Melakukan Inspeksi K3 Manajemen Unit Induk (GM) & Manajemen Unit Pelaksana (MUP)">Melakukan Inspeksi K3 Manajemen Unit Induk (GM) & Manajemen Unit Pelaksana (MUP)</option>
                                                <option value="MMelakukan Audit Internal SMK3">Melakukan Audit Internal SMK3</option>
                                                <option value="Melakukan Audit K3 pada Mitra Kerja">Melakukan Audit K3 pada Mitra Kerja</option>
                                                <option value="Melakukan Pengukuran Lingkungan Kerja">Melakukan Pengukuran Lingkungan Kerja</option>
                                                <option value="Melakukan Pemeriksaan Kesehatan Pegawai">Melakukan Pemeriksaan Kesehatan Pegawai</option>
                                                <option value="Melakukan Pengukuran Hygiene factor Mitra Kerja">Melakukan Pengukuran Hygiene factor Mitra Kerja</option>

                                            </select>
                                        </div>
                                       <div class="mb-1">
                                            <label class="form-label" for="level">Level</label>
                                            <select class="form-select" id="level" name="level">
                                                <option>silahkan isi level</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="divisi">Unit</label>
                                           <select class="form-select" id="divisi" name="divisi">
                                                <option>-Pilih-</option>
                                                <option value="UPDL Banjarbaru">UPDL BANJABARU</option>
                                                <option value="UPDL BOGOR">UPDL BOGOR</option>
                                                <option value="UPDL JAKARTA">UPDL JAKARTA</option>
                                                <option value="UPDL MAKASAR">UPDL MAKASAR</option>
                                                <option value="UPDL PADANG">UPDL PADANG</option>
                                                <option value="UPDL PALEMBANG">UPDL PALEMBANG</option>
                                                <option value="UPDL PANDAAN">UPDL PANDAAN</option>
                                                <option value="UPDL SEMARANG">UPDL SEMARANG</option>
                                                <option value="UPDL SURALAYA">UPDL SURALAYA</option>
                                                <option value="UPDL TUNTUNGAN">UPDL TUNTUNGAN</option>
                                                <option value="KANTOR INDUK">KANTOR INDUK</option>

                                            </select>
                                        </div>
                                        <!-- full Editor end -->

                                        {{-- <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label>Lampiran</label>
                                                <input class="form-control" name="document"
                                                type="file" id="document" multiple>
                                            </div>
                                        </div> --}}
                                        <!-- Basic Textarea start -->
                                        <!-- Basic Textarea end -->
                                        <!-- penjualan -->
                                        <div class="card-header">
                                            <br>
                                            <b class="card-title text-center">Upload File</b>
                                            <br>
                                        </div>
                                        <section id="form-control-repeater">
                                            <div class="row">
                                                <div class="invoice-repeater">
                                                    <div data-repeater-list="auditdoc">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label>upload document</label>
                                                                        <input class="form-control" name="document"
                                                                        type="file" id="document" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label for="keterangan" class="form-label">keterangan</label>
                                                                        <input class="form-control" name="keterangan" type="text"
                                                                            id="keterangan" >
                                                                    </div>
                                                                </div>
                                                               <div class="col-md-2 col-12 mb-41">
                                                                    <div class="mb-1">
                                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                            <i data-feather="x" class="me-25"></i>
                                                                            <span>Hapus</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-1">
                                                                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                                    <i data-feather="plus" class="me-25"></i>
                                                                    <span>Tambah File</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-success" id="type-success"
                                                            onclick="return confirm('Apakah anda yakin dengan data anda?')">simpan & ajukan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- penjualan -->
                                   

                                </form>

                            </div>
                        </div>
                    </div>
                    <!--/ Payment Card -->
                </div>

                <!--/ Card Advance -->

            </div>
        </div>
    </div>


    <!-- END: Content-->
@endsection






                <!-- Modern Vertical Wizard -->
                {{-- <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical-modern" role="tab" id="account-details-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Kriteria 1</span>
                                        <span class="bs-stepper-subtitle">Leadership & Management Commitment</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical-modern" role="tab" id="personal-info-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Personal Info</span>
                                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern" role="tab" id="address-step-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="map-pin" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </div>
                            </button>
                            <div class="step" data-target="#social-links-vertical-modern" role="tab" id="social-links-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="link" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Social Links</span>
                                        <span class="bs-stepper-subtitle">Add Social Links</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-vertical-modern" class="content" role="tabpanel" aria-labelledby="account-details-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Details</h5>
                                    <small class="text-muted">Enter Your Account Details.</small>
                                </div>
                               	<div class="col-lg-8 mx-auto my-5">	
			                	@if(count($errors) > 0)
			                	<div class="alert alert-danger">
				            	@foreach ($errors->all() as $error)
				            	{{ $error }} <br/>
				            	@endforeach
			                	</div>
		                		@endif
                                <div class="row">
                                    <form action="/K3/proses" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Menyusun RKAP Bidang K3</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Menerapan Contractor Safety Management System (CSMS)</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Membangun Sistem Manajemen K3 Terintegrasi</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary w-5" type="submit" >Submit</button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-info-vertical-modern" class="content" role="tabpanel" aria-labelledby="personal-info-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Personal Info</h5>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-first-name">First Name</label>
                                        <input type="text" id="vertical-modern-first-name" class="form-control" placeholder="John" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-last-name">Last Name</label>
                                        <input type="text" id="vertical-modern-last-name" class="form-control" placeholder="Doe" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-country">Country</label>
                                        <select class="select2 w-100" id="vertical-modern-country">
                                            <option label=" "></option>
                                            <option>UK</option>
                                            <option>USA</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-language">Language</label>
                                        <select class="select2 w-100" id="vertical-modern-language" multiple>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step-vertical-modern" class="content" role="tabpanel" aria-labelledby="address-step-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Address</h5>
                                    <small>Enter Your Address.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-address">Address</label>
                                        <input type="text" id="vertical-modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-landmark">Landmark</label>
                                        <input type="text" id="vertical-modern-landmark" class="form-control" placeholder="Borough bridge" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="pincode4">Pincode</label>
                                        <input type="text" id="pincode4" class="form-control" placeholder="658921" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="city4">City</label>
                                        <input type="text" id="city4" class="form-control" placeholder="Birmingham" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links-vertical-modern" class="content" role="tabpanel" aria-labelledby="social-links-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-twitter">Twitter</label>
                                        <input type="text" id="vertical-modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-facebook">Facebook</label>
                                        <input type="text" id="vertical-modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-google">Google+</label>
                                        <input type="text" id="vertical-modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-linkedin">Linkedin</label>
                                        <input type="text" id="vertical-modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- /Modern Vertical Wizard -->