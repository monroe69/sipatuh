<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keluar</title>
    <link rel="stylesheet" href="{{ public_path('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('/assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

    <style>
        .kop {
            font-size: 30px
        }

        .logo {
            position: absolute;
        }

        hr {
            margin: 0;
        }

        hr.hr-2 {
            margin-top: 3px;
            border: black 1px solid;
        }

    </style>

    @php
        use Carbon\Carbon;
    @endphp
</head>

<body>
    <div>
        <img class="logo" width="70px" src="{{ public_path('/app-assets/images/pages/Group 113.jpg') }}" alt=""
            >
        <div>
           @foreach ($leadership as $le)
               
           <p class="text-center m-0 text-uppercase" style="font-size: 18px">{{ $le->divisi }}</p>
           <p class="text-center m-0 text-uppercase" style="font-size: 18px">{{ $le->user->name }}</p>
           <p class="text-center m-0" style="font-size: 18px">Seluruh Data Table</p>
           <hr class="hr-1">
           <hr class="hr-2">
           @endforeach
        </div>
      
        <div class="mt-3">
             <div class="card-body border-bottom">
                            <h4 class="col-12">Leadership & Management Commitment</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                           <th class="text-center">No</th>
                                           <th class="text-center">divisi</th>
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $leadership as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td>
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
         <div class="mt-3">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Audit, Assessment and Inspection</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $audit as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td class="text-center">
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
    </div>
         <div class="mt-3">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $penerapan as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td class="text-center">
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
    </div>
         <div class="mt-3">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Safety Training and Education</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $safeti as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td class="text-center">
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
    </div>
         <div class="mt-3">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Safety Campaign and Communication</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $comunication as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td class="text-center">
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
    </div>
         <div class="mt-3">
                                          <div class="card-body border-bottom">
                            <h4 class="col-12">Reporting</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $reporting as $item )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                            <td class="text-center"> 
                                                 <a href="/pengajuandiajukan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td>
                                        
                                        <td class="text-center">{{ $item->catatan }}</td>
                                             <td class="text-center">
                                                @if ($item->status=="diajukan")
                                                <a class="btn-flat-{info}">diajukan</a>
                                                @elseif ($item->status=="ditinjau")
                                                <a class="btn-flat-{primary}">ditinjau</a>
                                                @elseif ($item->status=="revisi")
                                                <a class="btn-flat-{warning}">revisi</a>
                                                @elseif ($item->status=="disetujui")
                                                <a class="btn-flat-{succes}">disetujui</a>
                                                @elseif ($item->status=="ditolak")
                                                <a class="btn-flat-{danger}">ditolak</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>
        </div>
    </div>
   
</body>

</html>


