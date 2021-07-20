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

        // mengirim data pegawai ke view index
        return view('admin/v_dashboard', [
            'banyak_jual' => $banyak_jual,
            'banyak_user' => $banyak_user, 'max' => $max
        ]);
    }
}
