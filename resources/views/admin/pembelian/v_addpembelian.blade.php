@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembelian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Transaksi Pembelian</li>
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
                <form action="/pembelian/store" method="post">
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
                            <label>Nama Supplier</label>
                            <select name="supplier" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($supplier as $s)
                                <option value="{{ $s->id_supplier }}">{{ $s->nama_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label>Tanggal Beli</label>
                            <input type="date" class="form-control" name="tgl" placeholder="Tanggal Beli" required="required">
                        </div>
                        <div class="form-group col-2">
                            <label>Jumlah Beli</label>
                            <input type="number" class="form-control" name="jml" placeholder="Jumlah Beli" required="required">
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