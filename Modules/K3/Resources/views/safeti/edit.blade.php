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
                            <h2 class="content-header-title float-start mb-0">Form Upload </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Form Upload </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-12 col-md-12 mt-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pengajuan Biasa</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/K3/safetitable/{{ $safeti->id }}" class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 ">


                                                <div class="mb-2">
                                                    <label class="form-label" for="no_kriteria">no Kriteria</label>
                                                    <select class="form-select" id="no_kriteria"
                                                        name="no_kriteria" required autofocus value="{{ old('no_kriteria',$safeti->no_kriteria) }}">
                                                        <option >{{ old('no_kriteria',$safeti->kriteria)}}</option>
                                                 <option value="4.1">4.1</option>
                                                <option value="4.2">4.2</option>

                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Kriteria!
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-2">
                                                    <label class="form-label" for="keterangan">Keterangan</label>
                                                    <input type="text" id="keterangan" class="form-control"
                                                        name="keterangan" required autofocus value="{{ old('keterangan',$safeti->keterangan)}}" placeholder="Keterangan" />
                                                </div> --}}
                                                     <div class="mb-2">
                                                     <label class="form-label" for="sub_kriteria">sub kriteria</label>
                                                    <select class="form-select" id="sub_kriteria"
                                                        name="sub_kriteria"  required autofocus value="{{ old('sub_kriteria',$safeti->sub_kriteria)}}" placeholder="Keterangan">
                                                        <option value="">{{ old('sub_kriteria',$safeti->sub_kriteria)}}</option>
                                          <option value="Melaksanakan Pelatihan K3 Manajemen">Melaksanakan Pelatihan K3 Manajemen</option>
                                                <option value=" Melakukan Edukasi K3 Internal (Pegawai dan Karyawan Mitra Kerja)"> Melakukan Edukasi K3 Internal (Pegawai dan Karyawan Mitra Kerja)</option>

                                                    </select>
                                                    <div class="invalid-feedback">Pilih Keterangan!
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="level">Level</label>
                                                    <select class="form-select" id="level" name="level" required autofocus value="{{ old('level',$safeti->level)}}">
                                                        <option>{{ old('level',$safeti->level)}}</option>
                                                 <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                                                    </select>
                                                </div>

                                        <div class="col-12 offset-sm-5">
                                            <div class="card-body ">
                                                <button type="submit" class="btn btn-primary">
                                                 {{ __('Submit') }}
                                               </button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Basic File Browser start -->

                </section>
                <!-- Basic File Browser end -->
@endsection