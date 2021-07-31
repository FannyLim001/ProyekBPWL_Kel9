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
        return view('v_product', ['barang' => $barang]);
    }

    public function detail($id)
    {
        $detail = DB::table('barang')->where('id_barang', $id)->get();
        return view('v_detail_product', ['detail' => $detail]);
    }

    public function home()
    {
        $barang = DB::table('barang')->paginate(3);

        // mengirim data barang ke view detail_produk
        return view('v_home', ['barang' => $barang]);
    }

    public function member_home()
    {
        $barang = DB::table('barang')->paginate(3);

        // mengirim data barang ke view detail_produk
        return view('member/v_member_home', ['barang' => $barang]);
    }
}
