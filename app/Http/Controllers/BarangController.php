<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $data = [
            'barang' => $this->BarangModel->allData(),
        ];
        return view('admin/v_data_barang', $data);
    }

    public function add()
    {
        return view('admin/v_addbarang');
    }

    public function insert()
    {
        Request()->validate([
            'nama_barang' => 'required|unique:barang, nama_barang',
            'merk_barang' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'kategori_barang' => 'required',
            'deskripsi_barang' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png',
        ]);

        $file = Request()->foto_barang;
        $filename = Request()->$file->getClientOriginalName();
        $file->move(public_path('foto_barang'), $filename);

        DB::table('barang')->insert([
            'nama_barang' => Request()->nama,
            'merk_barang' => Request()->merk,
            'harga_barang' => Request()->harga,
            'stok_barang' => Request()->stok,
            'kategori_barang' => Request()->kategori,
            'deskripsi_barang' => Request()->deskripsi,
            'gambar' => $filename
        ]);
        return redirect('barang')->with('pesan', 'Data berhasil ditambahkan!');
    }
}
