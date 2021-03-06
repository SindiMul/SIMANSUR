<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratKeluarRequest;
use App\SuratKeluar;
use Illuminate\Http\Request;


class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_keluar = SuratKeluar::all();

        return view('pages.admin.surat-keluar.index', [
            'surat_keluar' => $surat_keluar
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.surat-keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratKeluarRequest $request)
    {
        $data = $request->all();
        $file = $data['file']->getClientOriginalName();
        $data['file']=$request->file->storeAs( 'public/assets/surat keluar', $file
        );
    //    $data['file']=$file;

        SuratKeluar::create($data);
        return redirect()->route('surat-keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $item = SuratKeluar::findOrFail($id);
        return view('pages.admin.surat-keluar.tampil', [
            'item' => $item
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
        $item = SuratKeluar::findOrFail($id);
        return view('pages.admin.surat-keluar.edit', [
            'item' => $item
        ]);
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
        $data = $request->all();
        $item = SuratKeluar::findOrFail($id);
        $file = $data['file']->getClientOriginalName();
        $data['file'] = $request->file->storeAs(
            'public/assets/surat keluar',
            $file
        );
        // $data['file'] = $file;

        $item->update($data);

        return redirect()->route('surat-keluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SuratKeluar::findorFail($id);
        $item->delete();

        return redirect()->route('surat-keluar.index');
    }
}
