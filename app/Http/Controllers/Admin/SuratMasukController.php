<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratMasukRequest;
use App\SuratMasuk;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SuratMasuk::all();
        $user = Auth::user();

        return view('pages.admin.surat-masuk.index', [
            'items' => $items,
            'user' => $user
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.surat-masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratMasukRequest $request)
    {
        $data = $request->all();
        $file = $data['file']->getClientOriginalName();
        $data['file'] = $request->file->storeAs(
            'public/assets/surat masuk',
            $file
        );
        // $data['file'] = $file;

        SuratMasuk::create($data);
        return redirect()->route('surat-masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = SuratMasuk::findOrFail($id);
        return view('pages.admin.surat-masuk.tampil', [
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
        $item = SuratMasuk::findOrFail($id);
        return view('pages.admin.surat-masuk.edit', [
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
    public function update(SuratMasukRequest $request, $id)
    {
        $data = $request->all();
        $item = SuratMasuk::findOrFail($id);
        $file = $data['file']->getClientOriginalName();
        $data['file'] = $request->file->storeAs(
            'public/assets/surat masuk',
            $file
        );
        // $data['file'] = $file;

        $item->update($data);
        return redirect()->route('surat-masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SuratMasuk::findorFail($id);
        $item->delete();

        return redirect()->route('surat-masuk.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
