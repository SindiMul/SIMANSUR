<?php

namespace App\Http\Controllers\Admin;
use App\SuratMasuk;
use App\SuratKeluar;
use App\DataPegawai;
use App\SuratTugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'masuk'=>SuratMasuk::count(),
            'keluar'=>SuratKeluar::count(),
            'datapegawai'=>DataPegawai::count(),
            'tugas'=>SuratTugas::count()
        ]);
    }
}
