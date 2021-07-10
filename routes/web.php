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
    return view('v_home');
});

Route::get('/produk', function () {
    return view('v_product');
});

Route::get('/detail_produk', function () {
    return view('v_product');
});

Route::get('/tentang', function () {
    return view('v_about');
});

Route::get('/tim', function () {
    return view('v_team');
});

Route::get('/testimoni', function () {
    return view('v_testimonies');
});

Route::get('/kontak', function () {
    return view('v_contact');
});

Route::get('/masuk', function () {
    return view('v_login');
});

Route::get('/daftar', function () {
    return view('v_register');
});
