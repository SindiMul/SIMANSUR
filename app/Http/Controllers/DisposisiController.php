<?php

namespace App\Http\Controllers;

use App\Disposisi;
use App\SuratMasuk;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DisposisiRequest;
use Illuminate\Http\Request;
use PDF;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SuratMasuk $data)
    {
        $smasuk = $data->findorfail($data->id);
        $disp = DB::select('select * from disposisis where suratmasuk_id = ?', [$data->id]);
        return view('pages.admin.disposisi.index', compact('smasuk', 'disp'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SuratMasuk $data)
    {
        $smasuk = $data->findorfail($data->id);
        return view('pages.admin.disposisi.create', compact('smasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisposisiRequest $request, SuratMasuk $data)
    { 
            $smasuk = $data->findorfail($data->id);
            $disp = $request->all();

            $disp['suratmasuk_id'] = $data->id;

            Disposisi::create($disp);
            return redirect()->route('disposisi.index', compact('disp', 'smasuk'));
        
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
    public function download(SuratMasuk $suratmasuk, $id)
    {
        
        $smasuk = $suratmasuk->findorfail($suratmasuk->id);
        $disp = Disposisi::findorfail($id);
        $pdf = PDF::loadview('pages.admin.disposisi.download', compact('disp','smasuk'));
        return $pdf->stream();
    }
}
