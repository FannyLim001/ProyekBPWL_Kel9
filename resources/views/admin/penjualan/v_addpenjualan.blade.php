@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Transaksi Penjualan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- form start -->
                <form action="/penjualan/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Nama Barang</label>
                            <select name="barang" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($barang as $b)
                                <option value="{{ $b->id_barang }}">{{ $b->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-5">
                            <label>Nama Member</label>
                            <select name="member" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($member as $m)
                                <option value="{{ $m->id_member }}">{{ $m->nama_member }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label>Tanggal Jual</label>
                            <input type="date" class="form-control" name="tgl" placeholder="Tanggal Jual" required="required">
                        </div>
                        <div class="form-group col-2">
                            <label>Jumlah Jual</label>
                            <input type="number" class="form-control" name="jml" placeholder="Jumlah Jual" required="required">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection