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
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Edit Transaksi Pembelian</li>
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
                @foreach ($pembelian as $p)
                <form action="/pembelian/update" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <input type="hidden" name="id" value="{{ $p->id_beli }}">
                            <label>Nama Barang</label>
                            <select name="barang" class="form-control">
                                <option value="{{ $p->id_barang }}">{{ $p->nama_barang }}</option>
                                @foreach ($barang as $b)
                                <option value="{{ $b->id_barang }}">{{ $b->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" form-group col-5">
                            <label>Nama Supplier</label>
                            <select name="supplier" class="form-control">
                                <option value="{{ $p->id_supplier }}">{{ $p->nama_supplier }}</option>
                                @foreach ($supplier as $s)
                                <option value="{{ $s->id_supplier }}">{{ $s->nama_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label>Tanggal Beli</label>
                            <input type="date" class="form-control" name="tgl" value="{{ $p->tgl_beli }}">
                        </div>
                        <div class="form-group col-2">
                            <label>Jumlah Beli</label>
                            <input type="number" class="form-control" name="jml" value="{{ $p->jml_beli }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection