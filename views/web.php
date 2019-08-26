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

Route::get('/32', function () {
    return view("login");
});

