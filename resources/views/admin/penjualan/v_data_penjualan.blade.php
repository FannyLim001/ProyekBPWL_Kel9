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
                        <li class="breadcrumb-item active">Penjualan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Transaksi Penjualan &nbsp;
                <a href="/penjualan/add" class="btn btn-sm btn-primary">Tambah</a>
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
                        <th>ID Penjualan</th>
                        <th>Nama Barang</th>
                        <th>Nama Member</th>
                        <th>Tgl Penjualan</th>
                        <th>Jml Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $data)
                    <tr>
                        <td>{{ $data->id_jual }}</td>
                        <td>{{ $data->nama_barang }}</td>
                        <td>{{ $data->nama_member }}</td>
                        <td>{{ $data->tgl_jual }}</td>
                        <td>{{ $data->jml_jual }}</td>
                        <td>
                            <a href="/penjualan/edit/{{ $data-> id_jual }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/penjualan/hapus/{{ $data-> id_jual }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID Penjualan</th>
                        <th>Nama Barang</th>
                        <th>Nama Member</th>
                        <th>Tgl Penjualan</th>
                        <th>Jml Penjualan</th>
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