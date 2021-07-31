<?php

namespace App\Http\Controllers;

use App\Models\PesanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->PesanModel = new PesanModel();
    }

    public function index()
    {
        $data = [
            'pesan' => $this->PesanModel->allData(),
        ];
        return view('admin/pesan/v_pesan', $data);
    }

    public function store(Request $request)
    {
        DB::table('pesan')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan
        ]);
        // alihkan halaman ke halaman pesan
        return redirect('/kontak')->with('kontak', 'Pesan telah terkirim!');
    }

    public function hapus($id)
    {
        DB::table('pesan')->where('id_pesan', $id)->delete();

        // alihkan halaman ke halaman pesan
        return redirect('pesan')->with('pesan', 'Data berhasil dihapus!');
    }
}
