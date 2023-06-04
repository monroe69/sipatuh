
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
            margin-bottom: 3px;
            border: black 1px solid;
        }
         hr.hr-3 {
              size:10px; 
            width:50%;
            
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
           {{-- @foreach ($leadership as $le) --}}
               
           <p class="text-center m-0 text-uppercase" style="font-size: 18px">Laporan</p>
           <p class="text-center m-0 text-uppercase" style="font-size: 18px">K3</p>
           <p class="text-center m-0" style="font-size: 18px">Seluruh Data Table</p>
           <hr class="hr-1">
           <hr class="hr-2">
           {{-- @endforeach --}}
        </div>
        {{-- leadership --}}
              <div class="mt-3">
             <div >
                            <h4 class="col-12">Leadership & Management Commitment</h4>
                        </div>
      <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                           <th class="text-center">Kriteria</th>
                                           <th class="text-center">divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $leadership as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ $rekapleadership}} </th>
                                        </tr>
                                    </tfoot>
            </table>
            {{-- <h6 class="text-end">Total Score : 
                {{ $rekapleadership}}
            </h6>
            <hr class="hr-1">
                                                                 --}}
        </div>
    </div>
        {{-- audit --}}
         <div class="mt-3">
                                          <div >
                            <h4 class="col-12">Audit, Assessment and Inspection</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th class="text-center">Kriteria</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $audit as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                        <tr>
                                            <th class="text-center"> Score </th>
                                             <td colspan="2"></td>
                                            <th class="text-center">  {{ $rekapaudit}} </th>
                                        </tr>
                                    </tfoot>
            </table>
        </div>
    </div>
    {{-- penerapan --}}
         <div class="mt-3">
                                          <div >
                            <h4 class="col-12">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th class="text-center">kriteria</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $penerapan as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                     <tfoot>
                                        <tr>
                                            <th class="text-center"> Score </th>
                                             <td colspan="2"></td>
                                            <th class="text-center">  {{ $rekappenerapan}} </th>
                                        </tr>
                                    </tfoot>
            </table>
        </div>
    </div>
    {{-- safeti --}}
         <div class="mt-3">
                                          <div >
                            <h4 class="col-12">Safety Training and Education</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th class="text-center">kriteria</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $safeti as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                     <tfoot>
                                        <tr>
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            <th class="text-center">  {{ $rekapsafeti}} </th>
                                        </tr>
                                    </tfoot>
            </table>
        </div>
    </div>
    {{-- comunication --}}
         <div class="mt-3">
                                          <div>
                            <h4 class="col-12">Safety Campaign and Communication</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th class="text-center">kriteria</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $comunication as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center"> Score </th>
                                             <td colspan="2"></td>
                                            <th class="text-center">  {{ $rekapcomunication}} </th>
                                        </tr>
                                    </tfoot>
            </table>
        </div>
    </div>
    {{-- reporting--}}
         <div class="mt-3">
                                          <div >
                            <h4 class="col-12">Reporting</h4>
                        </div>
            <table class="table table-bordered p-2">
                <thead>
                                        <tr>
                                            <th class="text-center">kriteria</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Program Kerja</th>
                                            <th class="text-center">Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $reporting as $item )
                                            
                                        <tr>
                                            <td class="text-center">{{ $item->no_kriteria }}</td>
                                            <td class="text-center">{{ $item->divisi }}</td>
                                            <td class="text-center">{{ $item->sub_kriteria }}</td>
                                            <td class="text-center">{{ $item->level }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center"> Score </th>
                                             <td colspan="2"></td>
                                            <th class="text-center">  {{ $rekapreporting}} </th>
                                        </tr>
                                    </tfoot>
            </table>
        </div>
    </div>
    <h6 style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2" class="text-end">Final Score&emsp;&emsp;:
        <b><u>
                                {{ $hitung}}
                            </u></b>
                            </h6>
                        </table>
                                                                </div>
                                                                <div class="col-xl-4 p-10 mt-xl-0 mt-2">
                                                                    <p class="mb-1 fw-bold"><br>Note :</p>
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="pe-1 mb-2">Nama Pengirim </td>
                                                                                <td>: <span class="fw-bold"><span>{{ $item->user->name }}</span></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pe-1 mb-2"><br>Jabatan
                                                                                </td>
                                                                                <td><br>: <span class="fw-bold"><span>{{$item->user->email}}</span></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="pe-1 mb-2"><br>Tanggal Pengiriman
                                                                                </td>
                                                                                <td><br>: <span class="fw-bold"><span>{{ $item->user->created_at }}</span></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    

</body>

</html>
