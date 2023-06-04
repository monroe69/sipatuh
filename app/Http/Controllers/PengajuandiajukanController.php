<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Auditdoc;
use Modules\K3\Entities\Pengajuan;
use Modules\K3\Entities\Leadership;
use Illuminate\Support\Facades\Auth;
use Modules\K3\Entities\Leadershipdoc;

class PengajuandiajukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  return view('pengajuan_k3.table.diajukan',[
        // 'leaderships'=> Leadership::select()->where('divisi','UPDL BOGOR')->get(),
        // ]);
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
        // return $id;
        $leadershipdoc=Leadershipdoc::select()->where('leadership_id', $id )->get();
                return view('k3.bogork3.leadership',[
                    'leadership'=>Leadership::select()->where('id', $id)->get()->first(),
                    'leadershipdocs'=> $leadershipdoc,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('pengajuan_k3.table.edit',[
        // 'pengajuan'=>Pengajuan::select()->where('id',$id)->get()->first(),
        // ]);
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
        Leadership::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'level' =>$request->level,
            'status'=>$request->status,
            
        ]);
        return redirect('/pengajuandiajukan')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
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
