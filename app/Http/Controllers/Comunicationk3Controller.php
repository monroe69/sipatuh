<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\K3\Entities\Comunication;
use Modules\K3\Entities\Comunicationdoc;

class Comunicationk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $comunicationdoc=Comunicationdoc::select()->where('comunication_id', $id )->get();
                return view('k3.bogork3.comunication',[
                    'comunication'=>Comunication::select()->where('id', $id)->get()->first(),
                    'comunicationdocs' => $comunicationdoc
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
        Comunication::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'level' =>$request->level,
            'status'=>$request->status,
            
        ]);
        return back()->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
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
