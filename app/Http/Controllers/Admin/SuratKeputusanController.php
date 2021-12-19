<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratKeputusanRequest;
use App\SuratKeputusan;
use Illuminate\Http\Request;


class SuratKeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_keputusan = SuratKeputusan::all();

        return view('pages.admin.sk.index', [
            'surat_keputusan' => $surat_keputusan
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.sk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratKeputusanRequest $request)
    {
        $data = $request->all();
        $file = $data['file']->getClientOriginalName();
        $data['file'] = $request->file->storeAs(
            'public/assets/surat keputusan',
            $file
        );
        // $data['file'] = $file;

        SuratKeputusan::create($data);
        return redirect()->route('sk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $item = SuratKeputusan::findOrFail($id);
        return view('pages.admin.sk.tampil', [
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
        $item = SuratKeputusan::findOrFail($id);
        return view('pages.admin.sk.edit', [
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
        $item = SuratKeputusan::findOrFail($id);
        $file =$data['file']->getClientOriginalName();
        $data['file'] = $request->file->storeAs(
            'public/assets/surat keputusan',
            $file
        );
        // $data['file'] = $file;

        $item->update($data);

        return redirect()->route('sk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SuratKeputusan::findorFail($id);
        $item->delete();

        return redirect()->route('sk.index');
    }
}
