<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        // mengambil data dari table barang
        $barang = DB::table('barang')->get();

        // mengirim data barang ke view detail_produk
        return view('v_detail_product', ['barang' => $barang]);
    }
}
