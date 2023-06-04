<?php

namespace App\Http\Controllers\cetak;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use App\Http\Controllers\Controller;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use Modules\K3\Entities\Comunication;

class CetakpadangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
     {
        $user = User::first();
        $audit = Audit::select()->where('divisi','UPDL PADANG')->get();
        $leadership = Leadership::select()->where('divisi','UPDL PADANG')->get();
        $penerapan = Penerapan::select()->where('divisi','UPDL PADANG')->get();
        $safeti = Safeti::select()->where('divisi','UPDL PADANG')->get();
        $comunication = Comunication::select()->where('divisi','UPDL PADANG')->get();
        $reporting = Reporting::select()->where('divisi','UPDL PADANG')->get();
        $pdf=PDF::loadview ('k3.padangk3.pdf', compact('audit','leadership','penerapan','user','safeti','comunication','reporting'));
       return $pdf->stream('Laporan Surat K3.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
