<?php

namespace App\Http\Controllers;
use App\SuratMasuk;
use App\SuratKeluar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'masuk'=>SuratMasuk::count(),
            'keluar'=>SuratKeluar::count()
        ]);
    }
}
