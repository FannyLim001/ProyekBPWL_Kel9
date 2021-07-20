<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
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

Route::get('/detail_produk', [ProdukController::class, 'index']);

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
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/daftar', function () {
    return view('v_register');
});

Route::post('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin\v_dashboard');
    });
    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/add', [BarangController::class, 'add']);
    Route::post('/barang/store', [BarangController::class, 'store']);
    Route::get('/member', [MemberController::class, 'index']);
    Route::get('/member/add', [MemberController::class, 'add']);
    Route::post('/member/store', [MemberController::class, 'store']);
    Route::get('/member/edit/{id}', [MemberController::class, 'edit']);
    Route::post('/member/update', [MemberController::class, 'update']);
    Route::get('/member/hapus/{id}', [MemberController::class, 'hapus']);
});

Route::group(['middleware' => ['auth', 'ceklevel:admin, member']], function () {
    Route::get('/home', function () {
        return view('member\v_member_home');
    });
});
