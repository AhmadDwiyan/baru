<?php

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

Route::get('/one', function () {
    return view("template");
});
Route:: get('/','ps@index');
Route:: get('/1','clean@index');
Route::resource('kontak','Kontak');

// Route::get('/88', function(){
//     return view('login');
// });
Route::resource('/kabupaten', 'Kabupaten');

Route::resource('/penjualan', 'Penjualan');

Route::resource('/barang', 'Barang');

Route::resource('/pembelian', 'Pembelian');

Route::get('login','login@index');

Route::post('login/cek','Login@cek');

Route::get('/','Dashboard@index');

Route::get('/logout','login@logout');

