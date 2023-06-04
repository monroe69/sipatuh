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
                                    <form method="POST" action="/K3/rkap/{{ $leadership->id }}" class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 ">


                                                <div class="mb-2">
                                                    <label class="form-label" for="no_kriteria">no Kriteria</label>
                                                    <select class="form-select" id="no_kriteria"
                                                        name="no_kriteria" required autofocus value="{{ old('no_kriteria',$leadership->no_kriteria) }}">
                                                        <option >{{ old('no_kriteria',$leadership->kriteria)}}</option>
                                                        <option value="1.1" >1.1</option>
                                                        <option value="1.2" >1.2</option>
                                                        <option value="1.3" >1.3</option>
                                                        
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Kriteria!
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-2">
                                                    <label class="form-label" for="keterangan">Keterangan</label>
                                                    <input type="text" id="keterangan" class="form-control"
                                                        name="keterangan" required autofocus value="{{ old('keterangan',$leadership->keterangan)}}" placeholder="Keterangan" />
                                                </div> --}}
                                                     <div class="mb-2">
                                                     <label class="form-label" for="sub_kriteria">sub kriteria</label>
                                                    <select class="form-select" id="sub_kriteria"
                                                        name="sub_kriteria"  required autofocus value="{{ old('sub_kriteria',$leadership->sub_kriteria)}}" placeholder="Keterangan">
                                                        <option value="">{{ old('sub_kriteria',$leadership->sub_kriteria)}}</option>
                                                        <option value="Menyusun Rkap Bidang K3">Menyusun Rkap Bidang K3</option>
                                                        <option value="CSMC">CMSC
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Keterangan!
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="level">Level</label>
                                                    <select class="form-select" id="level" name="level" required autofocus value="{{ old('keterangan',$leadership->level)}}">
                                                        <option>{{ old('keterangan',$leadership->level)}}</option>
                                                        <option value="level 1" >level 1</option>
                                                        <option value="level 2" >level 2</option>
                                                        <option value="level 3" >level 3</option>
                                                        <option value="level 4" >level 4</option>
                                                        <option value="level 5" >level 5</option>
                                                    </select>
                                                </div>
                                                
                                        <div class="col-12 offset-sm-5">
                                            <div class="card-body ">
                                                <button class="btn btn-outline-primary" id="type-update"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')">Simpan</button>
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