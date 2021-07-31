<?php

namespace App\Http\Controllers;

use App\Models\PembelianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->PembelianModel = new PembelianModel();
    }

    public function index()
    {
        // mengambil data dari table beli
        $pembelian = $this->PembelianModel->allData();

        // mengirim data beli ke view index
        return view('admin/v_data_pembelian', ['pembelian' => $pembelian]);
    }

    public function add()
    {
        $barang = $this->PembelianModel->data_barang();
        $supplier = $this->PembelianModel->data_supplier();
        // memanggil view tambah
        return view('admin/v_addpembelian', ['barang' => $barang, 'supplier' => $supplier]);
    }

    public function store(Request $request)
    {
        // insert data ke table beli
        DB::table('pembelian')->insert([
            'id_barang' => $request->barang,
            'id_supplier' => $request->supplier,
            'tgl_beli' => $request->tgl,
            'jml_beli' => $request->jml
        ]);
        // alihkan halaman ke halaman beli
        return redirect('pembelian')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // mengambil data beli berdasarkan id yang dipilih
        $pembelian = DB::table('pembelian')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->join('supplier', 'pembelian.id_supplier', '=', 'supplier.id_supplier')
            ->select('pembelian.*', 'barang.nama_barang', 'supplier.nama_supplier')
            ->where('id_beli', $id)
            ->get();

        $barang = $this->PembelianModel->data_barang();
        $supplier = $this->PembelianModel->data_supplier();
        // passing data beli yang didapat ke view edit.blade.php
        return view('admin/v_editpembelian', ['pembelian' => $pembelian, 'barang' => $barang, 'supplier' => $supplier]);
    }

    public function update(Request $request)
    {
        // update data beli
        DB::table('pembelian')->where('id_beli', $request->id)->update([
            'id_barang' => $request->barang,
            'id_supplier' => $request->supplier,
            'tgl_beli' => $request->tgl,
            'jml_beli' => $request->jml
        ]);
        // alihkan halaman ke halaman beli
        return redirect('pembelian')->with('pesan', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        // menghapus data beli berdasarkan id yang dipilih
        DB::table('pembelian')->where('id_beli', $id)->delete();

        // alihkan halaman ke halaman beli
        return redirect('pembelian')->with('pesan', 'Data berhasil dihapus!');
    }
}
