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
        $merk = DB::table('barang')->distinct()->get('merk_barang');
        $harga = DB::table('barang')->distinct()->get('harga_barang');
        $kategori = DB::table('barang')->distinct()->get('kategori_barang');
        $stok = DB::table('barang')->distinct()->get('stok_barang');

        // mengirim data barang ke view detail_produk
        return view('v_product', [
            'barang' => $barang,
            'merk' => $merk,
            'harga' => $harga,
            'kategori' => $kategori,
            'stok' => $stok
        ]);
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

    public function cart()
    {
        $barang = DB::table('barang')->get();

        // mengirim data barang ke view detail_produk
        return view('v_keranjang', ['barang' => $barang]);
    }
}
