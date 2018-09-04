<?php

use App\Provinsi;
use App\Kota;
use App\Kecamatan;
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
Route::get('/profile', function () {
    return view('profile');
});
Route::resource('contact', 'ContactController');
Route::get('/data', function() {
	$provinsi = Provinsi::all();
	$kota = Kota::all();
	$kecamatan = Kecamatan::all();
	return view ('data')->with([
		'provinsi' => $provinsi,
		'kota' => $kota,
		'kecamatan' => $kecamatan
		 ]);
});


Route::get('api/contact', 'ContactController@apiContact')->name('api.contact');
Route::get('export', 'ContactController@exportContact')->name('export.contact');
Route::post('import', 'ContactController@importContact')->name('import.contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
