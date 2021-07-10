<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailProdukController extends Controller
{
    public function index()
    {
        // mengambil data dari table barang
        $pegawai = DB::table('barang')->get();

        // mengirim data barang ke view index
        return view('detail_produk', ['barang' => $pegawai]);
    }
}
