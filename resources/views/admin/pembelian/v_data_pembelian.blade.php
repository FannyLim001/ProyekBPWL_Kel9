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
                        <li class="breadcrumb-item active">Pembelian</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Transaksi Pembelian &nbsp;
                <a href="/pembelian/add" class="btn btn-sm btn-primary">Tambah</a>
                @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('pesan') }}
                </div>
                @endif
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Pembelian</th>
                        <th>Nama Barang</th>
                        <th>Nama Supplier</th>
                        <th>Tgl Pembelian</th>
                        <th>Jml Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembelian as $data)
                    <tr>
                        <td>{{ $data->id_beli }}</td>
                        <td>{{ $data->nama_barang }}</td>
                        <td>{{ $data->nama_supplier }}</td>
                        <td>{{ $data->tgl_beli }}</td>
                        <td>{{ $data->jml_beli }}</td>
                        <td>
                            <a href="/pembelian/edit/{{ $data-> id_beli }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/pembelian/hapus/{{ $data-> id_beli }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID Pembelian</th>
                        <th>Nama Barang</th>
                        <th>Nama Supplier</th>
                        <th>Tgl Pembelian</th>
                        <th>Jml Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection