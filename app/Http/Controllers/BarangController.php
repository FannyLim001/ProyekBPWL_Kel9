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

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_barang' => 'required|mimes:jpeg,png,jpg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('foto_barang');

        $nama_gambar = $gambar->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'foto_barang';
        $gambar->move($tujuan_upload, $nama_gambar);

        // insert data ke table pegawai
        DB::table('barang')->insert([
            'nama_barang' => $request->nama,
            'merk_barang' => $request->merk,
            'harga_barang' => $request->harga,
            'stok_barang' => $request->stok,
            'kategori_barang' => $request->kategori,
            'deskripsi_barang' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('barang')->with('pesan', 'Data berhasil ditambahkan!');
    }
}
