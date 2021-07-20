<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $member = DB::table('member')->get();

        // mengirim data pegawai ke view index
        return view('admin/v_data_member', ['member' => $member]);
    }

    public function add()
    {
        // memanggil view tambah
        return view('admin/v_addmember');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('member')->insert([
            'nama_member' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('member')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $member = DB::table('member')->where('id_member', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin/v_editmember', ['member' => $member]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('member')->where('id_member', $request->id)->update([
            'nama_member' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('member')->with('pesan', 'Data berhasil diupdate!');
    }
}
