@extends('layout/v_admin')
@section('admin_content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Member</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Member</li>
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
                <form action="/member/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <label>Nama Member</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Member" required="required">
                        </div>
                        <div class="form-group col-5">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Member" required="required">
                        </div>
                        <div class="form-group col-7">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password Member" required="required">
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