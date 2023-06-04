<?php

namespace App\Http\Controllers\divisi;

use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Modules\K3\Entities\Comunication;

class Jakartak3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             return view('k3.jakartak3.index',[
        'audits'=> Audit::select()->where('divisi','UPDL JAKARTA')->get(),
        'leaderships'=> Leadership::select()->where('divisi','UPDL JAKARTA')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','UPDL JAKARTA')->get(),
        'safetis'=> Safeti::select()->where('divisi','UPDL JAKARTA')->get(),
        'comunications'=> Comunication::select()->where('divisi','UPDL JAKARTA')->get(),
        'reportings'=> Reporting::select()->where('divisi','UPDL JAKARTA')->get()
        ]);
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
