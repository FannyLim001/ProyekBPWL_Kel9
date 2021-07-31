<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PembelianModel extends Model
{
    public function allData()
    {
        return DB::table('pembelian')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->join('supplier', 'pembelian.id_supplier', '=', 'supplier.id_supplier')
            ->select('id_beli', 'barang.nama_barang', 'supplier.nama_supplier', 'tgl_beli', 'jml_beli')
            ->get();
    }

    public function data_barang()
    {
        return DB::table('barang')->select('id_barang', 'nama_barang')->get();
    }

    public function data_supplier()
    {
        return DB::table('supplier')->select('id_supplier', 'nama_supplier')->get();
    }
}
