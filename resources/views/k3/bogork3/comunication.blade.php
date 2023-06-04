@extends('tablelay.table')
@section('content')
{{-- comunication --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="nav-filled">
                    <div class="row match-height">

                        <!-- Justified Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pengajuan Data K3</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " id="home-tab-justified" data-bs-toggle="tab"
                                                href="#proposal" role="tab" aria-controls="home-just"
                                                aria-selected="true">Detail</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="proposal" role="tabpanel"
                                            aria-labelledby="home-tab-justified">
                                            <!-- proposal -->
                                            <div class="col-xl-12 col-md-8 col-12">
                                                <div class="card invoice-preview-card">


                                                    <!-- Address and Contact starts -->
                                                    <div class="card-body invoice-padding pt-0">
                                                        <div class="row invoice-spacing">
                                                            <div class="col-xl-8 p-0">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="pe-1">nama pengirim</td>
                                                                            <td>: {{ $comunication->user->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pe-1">Divisi</td>
                                                                            <td>: {{ $comunication->divisi }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pe-1">no kriteria</td>
                                                                            <td>: {{ $comunication->no_kriteria }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pe-1">Kriteria</td>
                                                                            <td>:
                                                                                {{ $comunication->sub_kriteria }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pe-1">Level</td>
                                                                            <td>: {{ $comunication->level }}
                                                                            </td>
                                                                        </tr>
                                                                        @foreach ($comunicationdocs as $comunicationdoc)
                                                                        <tr>
                                                                                    
                                                                                <td class="pe-1">{{ $comunicationdoc->keterangan }}</td>
                                                                                <td><span class="fw-bold">:
                                                                                <a href="{{ asset('storage/' . $comunicationdoc->document) }}" target="blank">document <i data-feather="file"></i> </a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        <tr>
                                                                            <td class="pe-1">Catatan</td>
                                                                            <td>: {{ $comunication->catatan }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <div class="col-sm-9 ">
                                                                    <form action="/pengajuandiajukan/{{ $comunication->id }}" method="POST">
                                                                        @method('put')
                                                                        @csrf      <div class="mb-2">
                                                                        <label class="d-block form-label" for="catatan">Catatan</label>
                                                                        <textarea class="form-control" id="catatan" name="catatan" placeholder="Catatan" rows="3" ></textarea>
                                                                    </div>
                                                                        <div class="mb-2">
                                                                        <label class="form-label" for="level">level</label>
                                                                        <select class="form-select" id="level" name="level" required>
                                                                          <option> {{ $comunication->level }} </option>
                                                                          <option value="1"> 1 </option>
                                                                        <option value="2"> 2 </option>
                                                                        <option value="3"> 3 </option>
                                                                        <option value="4"> 4 </option>
                                                                        <option value="5"> 5 </option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="mb-2">
                                                                        <label class="form-label" for="status">status</label>
                                                                        <select class="form-select" id="status" name="status" required>
                                                                          <option> Validation </option>
                                                                        <option value="disetujui">disetujui </option>
                                                                           <option value="revisi">revisi</option>
                                                                          <option value="ditolak">ditolak</option>
                                                                          </select>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-gradient-success btn-sm">Submit</button>
                                                                         <a onclick="history.back()" class="btn btn-outline-dark btn-sm">Cancel</a>
                                                                        {{-- <input type="hidden" name="status" value="disetujui">
                                                                        <a href="#" class="btn btn-gradient-warning btn-sm">revisi</a>
                                                                        <a href="#" class="btn btn-gradient-danger btn-sm">ditolak</a> --}}
                                                                    </form>
                                                                </div>
                                                            </div>

@endsection