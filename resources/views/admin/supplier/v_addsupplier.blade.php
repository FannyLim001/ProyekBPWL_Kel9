@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Supplier</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Supplier</li>
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
                <form action="/supplier/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Nama Supplier</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Supplier" required="required">
                        </div>
                        <div class="form-group col-5">
                            <label>Kota Supplier</label>
                            <input type="text" class="form-control" name="kota" placeholder="Kota Supplier" required="required">
                        </div>
                        <div class="form-group col-7">
                            <label>Alamat Supplier</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Supplier" required="required">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection