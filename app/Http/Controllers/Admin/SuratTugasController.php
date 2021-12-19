<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratTugasRequest;
use App\SuratTugas;
use App\detail;
use App\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SuratTugas::all();
        

        return view('pages.admin.surat-tugas.index', [
            'items' => $items,
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pegawai =DataPegawai::all();
        return view('pages.admin.surat-tugas.create', [
            'data_pegawai' => $data_pegawai
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        
        $surat = new SuratTugas;
        $surat->ttd_id =$data['ttd_id'];
        $surat->nomor =$data['nomor'];
        $surat->perihal =$data['perihal'];
        $surat->dasar=$data['dasar'];
        $surat->hari=$data['hari'];
        $surat->pukul=$data['pukul'];
        $surat->tempat=$data['tempat'];
        // dd($data);
        $surat->save();
        // $detail = new detail;
        // $detail->surat_id =$surat->id;
        $b=$request->data_pegawai_id;
        for ($i=0; $i < count($b); $i++) { 
            $datasave = [
                'surat_id'=>$surat->id,
                'data_pegawai_id'=>$b[$i]
            ];
            detail::create($datasave);
        }
        
        


        return redirect()->route('surat-tugas.index');
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
        $item = DataPegawai::findOrFail($id);
        $item = SuratTugas::findOrFail($id);
        $data_pegawai = DataPegawai::all();

        return view('pages.admin.surat-tugas.edit', [
            'item' => $item,
            'data_pegawai' => $data_pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuratTugasRequest $request, $id)
    {
        $data = $request->all();


        $item =SuratTugas::findOrFail($id);

        $item->update($data);

        return redirect()->route('surat-tugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SuratTugas::findorFail($id);
        $item->delete();

        return redirect()->route('surat-tugas.index');
    }

   
}
