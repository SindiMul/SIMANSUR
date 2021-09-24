<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratTugasRequest;
use App\SuratTugas;
use App\detail;
use App\DataPegawai;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PrintController extends Controller
{
    public function download($id)
    {
        // $petugas = petugas::with(['detail'])->get();
        $item = SuratTugas::findorFail($id);
        $tanggal=  Carbon::now()->isoFormat('D MMMM Y');
        $disp =  SuratTugas::with('iii','ppp')->where('id',$id)->first();
        return view('pages.admin.surat-tugas.d',[
            'disp' => $disp,
            'tanggal'=>$tanggal,
            'item'=>$item
        ]);
        // $pdf = PDF::loadview('pages.admin.surat-tugas.d', compact('disp', 'item','tanggal'));
        // return $pdf->stream();
    }
}
