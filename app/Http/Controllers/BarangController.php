<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

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
            'gambar' => 'required',
        ]);
    }
}
