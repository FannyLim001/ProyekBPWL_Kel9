<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $banyak_jual = DB::table('penjualan')->count('id_jual');
        $banyak_user = DB::table('member')->count('id_member');
        $max = DB::table('pembelian')->max('jml_beli');
        $banyak_pesan = DB::table('pesan')->count('id_pesan');
        $jual = DB::table('penjualan')->whereBetween('tgl_jual', ['2021-01-01', '2021-12-31'])
            ->selectRaw('DATE_FORMAT(tgl_jual,"%m") as date, count(id_jual) as total_jual')
            ->groupBy('date')->get();

        $data = [];

        foreach ($jual as $p) {
            $data[] = $p->total_jual;
        }

        // dd($data);

        // mengirim data pegawai ke view index
        return view('admin/v_dashboard', [
            'banyak_jual' => $banyak_jual,
            'banyak_user' => $banyak_user,
            'max' => $max,
            'banyak_pesan' => $banyak_pesan,
            'data' => $data
        ]);
    }
}
