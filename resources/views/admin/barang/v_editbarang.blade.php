@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Barang</li>
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
                @foreach ($barang as $b)
                <form action="/barang/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-4">
                            <input type="hidden" name="id" value="{{ $b->id_barang }}">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" value="{{ $b->nama_barang }}">
                        </div>
                        <div class="form-group col-3">
                            <label>Merk Barang</label>
                            <input type="text" class="form-control" name="merk" value="{{ $b->merk_barang }}">
                        </div>
                        <div class="form-group col-4">
                            <label>Nama Supplier</label>
                            <select name="supplier" class="form-control">
                                <option value="{{ $b->id_supplier }}">{{ $b->nama_supplier }}</option>
                                @foreach ($supplier as $s)
                                <option value="{{ $s->id_supplier }}">{{ $s->nama_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-2">
                            <label>Harga Barang</label>
                            <input type="number" class="form-control" name="harga" value="{{ $b->harga_barang }}">
                        </div>
                        <div class="form-group col-2">
                            <label>Stok Barang</label>
                            <input type="number" class="form-control" name="stok" value="{{ $b->stok_barang }}">
                        </div>
                        <div class="form-group col-3">
                            <label>Kategori Barang</label>
                            <input type="text" class="form-control" name="kategori" value="{{ $b->kategori_barang }}">
                        </div>
                        <div class="form-group col-6 row-3">
                            <label>Deskripsi Barang</label>
                            <textarea class="form-control" name="deskripsi">{{ $b->deskripsi_barang }}</textarea>
                        </div>
                        <div class="form-group col-3 row-2">
                            <label>Upload Gambar Barang</label>
                            <input type="file" name="foto_barang" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection