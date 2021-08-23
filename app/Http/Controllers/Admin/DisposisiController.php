<?php

namespace App\Http\Controllers\Admin;

use App\Disposisi;
use App\SuratMasuk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disposisi = Disposisi::all();
        return view('pages.admin.disposisi.index', [
            'disposisi' => $disposisi,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.disposisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $surat_masuk_id)
    {

        $item = SuratMasuk::find($surat_masuk_id);

        $save = new Disposisi();
        $save->tanggal_penyelesaian = $request->tanggal_penyelesaian;
        $save->tembusan = $request->tembusan;
        // $disposisi->approved = true;
        $save->surat_masuk()->associate($item);

        $save->save();

        // Session::flash('success', 'Comment was added');

        // $data = $request->all();
        // $item = SuratMasuk::findOrFail($surat_masuk_id);

        // $item->update($data);

        return redirect()->route('pages.admin.disposisi.index');
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
