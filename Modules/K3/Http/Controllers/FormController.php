<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Modules\K3\Entities\Pengajuan;
use Modules\K3\Entities\Form;
use Modules\K3\Entities\datak3l;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('k3::pengajuan.form');
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('k3::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
        'document' => 'required'
        ]);
        // $file           = $request->file('upload_document');
        // $nama_file      = $file->getClientOriginalName();
        // $file->move('file_upload',$file->getClientOriginalName());
        // $upload = new Datak3l;{
        // $upload->upload_document = $nama_file;
        // $upload->save();
        // $query=k3l::select()->get()->count();
        // $id=$query+1;
        // K3l::create([
        //     'id'=>$id,
        //     'user_id'=>Auth::user()->id,
        //     'judul'=>$request->judul,
        //     'kantor_cabang'=>$request->kantor_cabang,
        //     'tanggal_dibuat'=>$request->tanggal_dibuat,
        // ]);
        if ($request->document){
                $document=$request->document->store('foto-skpd-pembiayaan');
            }
             $query=Pengajuan::select()->get()->count();
             $id=$query+1;
            Pengajuan::create([
                'id'=>$id,
                'user_id'=>Auth::user()->id,
                'tanggal_upload'=>$request->tanggal_upload,
                'kriteria'=>$request->kriteria,
                'keterangan'=>$request->keterangan,
                'level'=> $request->level,
                'divisi'=> $request->divisi,
                'catatan'=>$request->catatan,
                'status'=>'diajukan',
                'document'=>$document,
            ]);
        return redirect('/K3/rkap')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('k3::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('k3::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
