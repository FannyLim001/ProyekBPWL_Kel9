<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        User::create([
            'name' => $request->nama,
            'level' => 'member',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        // insert data ke table pegawai
        DB::table('member')->insert([
            'nama_member' => $request->nama,
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
            'nama_member' => $request->nama,\
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('member')->with('pesan', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('member')->where('id_member', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('member')->with('pesan', 'Data berhasil dihapus!');
    }
}
