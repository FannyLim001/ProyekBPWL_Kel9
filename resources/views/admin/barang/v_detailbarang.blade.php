@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Detail Barang</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-9 col-sm-5">
                        @foreach ($barang as $data)
                        <h3 class="d-inline-block d-sm-none">{{ $data->nama_barang }}</h3>
                        <div class="col-12">
                            <img src="{{url('foto_barang/'.$data->gambar)}}" width="300px" alt="foto barang">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $data->nama_barang }}</h3>
                        <p><button type="button" class="btn btn-primary">{{ $data->merk_barang }}</button> &nbsp; <button type="button" class="btn btn-info">{{ $data->kategori_barang }}</button></p>

                        <hr>
                        <h4>Harga</h4>
                        <div class="bg-gray py-3 px-2">
                            <h2 class="mb-0">
                                Rp. {{ $data->harga_barang }}
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {{ $data->deskripsi_barang }} </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection