<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $supplier = DB::table('supplier')->get();

        // mengirim data pegawai ke view index
        return view('admin/supplier/v_data_supplier', ['supplier' => $supplier]);
    }

    public function add()
    {
        // memanggil view tambah
        return view('admin/supplier/v_addsupplier');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('supplier')->insert([
            'nama_supplier' => $request->nama,
            'kota_supplier' => $request->kota,
            'alamat_supplier' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('supplier')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $supplier = DB::table('supplier')->where('id_supplier', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin/supplier/v_editsupplier', ['supplier' => $supplier]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('supplier')->where('id_supplier', $request->id)->update([
            'nama_supplier' => $request->nama,
            'kota_supplier' => $request->kota,
            'alamat_supplier' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('supplier')->with('pesan', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('supplier')->where('id_supplier', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('supplier')->with('pesan', 'Data berhasil dihapus!');
    }
}
