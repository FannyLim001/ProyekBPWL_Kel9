<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pembelian = DB::table('pembelian')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->join('supplier', 'pembelian.id_supplier', '=', 'supplier.id_supplier')
            ->select('id_beli', 'barang.nama_barang', 'supplier.nama_supplier', 'tgl_beli', 'jml_beli')
            ->get();

        // mengirim data pegawai ke view index
        return view('admin/v_data_pembelian', ['pembelian' => $pembelian]);
    }

    public function add()
    {
        $barang = DB::table('barang')->select('id_barang', 'nama_barang')->get();
        $supplier = DB::table('supplier')->select('id_supplier', 'nama_supplier')->get();
        // memanggil view tambah
        return view('admin/v_addpembelian', ['barang' => $barang, 'supplier' => $supplier]);
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pembelian')->insert([
            'id_barang' => $request->barang,
            'id_supplier' => $request->supplier,
            'tgl_beli' => $request->tgl,
            'jml_beli' => $request->jml
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('pembelian')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pembelian = DB::table('pembelian')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->join('supplier', 'pembelian.id_supplier', '=', 'supplier.id_supplier')
            ->select('pembelian.*', 'barang.nama_barang', 'supplier.nama_supplier')
            ->where('id_beli', $id)
            ->get();

        $barang = DB::table('barang')->select('id_barang', 'nama_barang')->get();
        $supplier = DB::table('supplier')->select('id_supplier', 'nama_supplier')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin/v_editpembelian', ['pembelian' => $pembelian, 'barang' => $barang, 'supplier' => $supplier]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pembelian')->where('id_beli', $request->id)->update([
            'id_barang' => $request->barang,
            'id_supplier' => $request->supplier,
            'tgl_beli' => $request->tgl,
            'jml_beli' => $request->jml
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('pembelian')->with('pesan', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pembelian')->where('id_beli', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('pembelian')->with('pesan', 'Data berhasil dihapus!');
    }
}
