<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Modules\K3\Entities\Datak3l;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //
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
        // return $request;
        $request->validate([
        'upload_document' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new Datak3l();
        if($request->file) {
            $filePath= $request->file->store('file-data-k3l');
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return redirect('/K3/form')
            ->with('success','File has been uploaded.')
            ->with('upload_document');
        }
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
