<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', [ProdukController::class, 'home']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/detail_produk/{id}', [ProdukController::class, 'detail']);

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
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/add', [BarangController::class, 'add']);
    Route::post('/barang/store', [BarangController::class, 'store']);
    Route::get('/barang/detail/{id}', [BarangController::class, 'detail']);
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
    Route::post('/barang/update', [BarangController::class, 'update']);
    Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus']);

    Route::get('/member', [MemberController::class, 'index']);
    Route::get('/member/add', [MemberController::class, 'add']);
    Route::post('/member/store', [MemberController::class, 'store']);
    Route::get('/member/edit/{id}', [MemberController::class, 'edit']);
    Route::post('/member/update', [MemberController::class, 'update']);
    Route::get('/member/hapus/{id}', [MemberController::class, 'hapus']);

    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::get('/supplier/add', [SupplierController::class, 'add']);
    Route::post('/supplier/store', [SupplierController::class, 'store']);
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
    Route::post('/supplier/update', [SupplierController::class, 'update']);
    Route::get('/supplier/hapus/{id}', [SupplierController::class, 'hapus']);

    Route::get('/pembelian', [PembelianController::class, 'index']);
    Route::get('/pembelian/add', [PembelianController::class, 'add']);
    Route::post('/pembelian/store', [PembelianController::class, 'store']);
    Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
    Route::post('/pembelian/update', [PembelianController::class, 'update']);
    Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'hapus']);

    Route::get('/penjualan', [PenjualanController::class, 'index']);
    Route::get('/penjualan/add', [PenjualanController::class, 'add']);
    Route::post('/penjualan/store', [PenjualanController::class, 'store']);
    Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit']);
    Route::post('/penjualan/update', [PenjualanController::class, 'update']);
    Route::get('/penjualan/hapus/{id}', [PenjualanController::class, 'hapus']);
});
