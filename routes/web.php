<?php

use App\Disposisi;
use App\Http\Controllers\Admin\DisposisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');


        Route::resource('surat-masuk', 'SuratMasukController');

        Route::resource('surat-keluar', 'SuratKeluarController');

        Route::resource('disposisi', 'DisposisiController');

        Route::post('disposisi/create/{surat_masuk_id}', 'DisposisiController@store');
    });
