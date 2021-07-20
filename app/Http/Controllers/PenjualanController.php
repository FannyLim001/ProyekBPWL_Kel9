<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $penjualan = DB::table('penjualan')
            ->join('barang', 'penjualan.id_barang', '=', 'barang.id_barang')
            ->join('member', 'penjualan.id_member', '=', 'member.id_member')
            ->select('id_jual', 'barang.nama_barang', 'member.nama_member', 'tgl_jual', 'jml_jual')
            ->get();

        // mengirim data pegawai ke view index
        return view('admin/v_data_penjualan', ['penjualan' => $penjualan]);
    }

    public function add()
    {
        $barang = DB::table('barang')->select('id_barang', 'nama_barang')->get();
        $member = DB::table('member')->select('id_member', 'nama_member')->get();
        // memanggil view tambah
        return view('admin/v_addpenjualan', ['barang' => $barang, 'member' => $member]);
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('penjualan')->insert([
            'id_barang' => $request->barang,
            'id_member' => $request->member,
            'tgl_jual' => $request->tgl,
            'jml_jual' => $request->jml
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('penjualan')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $penjualan = DB::table('penjualan')
            ->join('barang', 'penjualan.id_barang', '=', 'barang.id_barang')
            ->join('member', 'penjualan.id_member', '=', 'member.id_member')
            ->select('penjualan.*', 'barang.nama_barang', 'member.nama_member')
            ->where('id_jual', $id)
            ->get();

        $barang = DB::table('barang')->select('id_barang', 'nama_barang')->get();
        $member = DB::table('member')->select('id_member', 'nama_member')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin/v_editpenjualan', ['penjualan' => $penjualan, 'barang' => $barang, 'member' => $member]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('penjualan')->where('id_jual', $request->id)->update([
            'id_barang' => $request->barang,
            'id_member' => $request->member,
            'tgl_jual' => $request->tgl,
            'jml_jual' => $request->jml
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('penjualan')->with('pesan', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('penjualan')->where('id_jual', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('penjualan')->with('pesan', 'Data berhasil dihapus!');
    }
}
