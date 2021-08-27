<?php

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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/disposisi/{data}', 'DisposisiController@index')->name('disposisi.index');
Route::get('/disposisi/{data}/create', 'DisposisiController@create')->name('disposisi-create');
Route::post('/disposisi/{data}', 'DisposisiController@store')->name('disposisi.store');
Route::get('/disposisi/{suratmasuk}/{id}/download', 'DisposisiController@download')->name('disposisi.download');
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('surat-masuk', 'SuratMasukController');
        Route::resource('surat-keluar', 'SuratKeluarController');
    });
