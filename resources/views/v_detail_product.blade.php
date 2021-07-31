@extends('layout/v_user')
@section('content')

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url({{URL::asset('template/user/assets/images/brochures.jpg')}})">
    <div class="container">
        <div class="row">
            @foreach ($detail as $d)
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2> <em> Rp.
                            {{ $d->harga_barang }}
                        </em>
                    </h2>
                    <p>Buruan pesan sekarang juga melalui WA/DM toko kami!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        </div>
        <br>
        <br>

        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>
                    <li><a href='#tabs-1'><i class="fa fa-cog"></i> Spesifikasi Produk</a></li>
                    <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Deskripsi Produk</a></li>
                    <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Beli Produk</a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                    <article id='tabs-1'>
                        <h4>Spesifikasi Produk</h4>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Nama Produk</label>

                                <p>
                                    {{$d->nama_barang}}
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <label>Merek</label>

                                <p>
                                    {{$d->merk_barang}}
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <label>Stok Produk</label>

                                <p>
                                    {{$d->stok_barang}}
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <label>Kategori Produk</label>

                                <p>
                                    {{$d->kategori_barang}}
                                </p>
                            </div>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <h4>Deskripsi Produk</h4>
                        <p>
                            {{$d->deskripsi_barang}}
                        </p>
                    </article>
                    <article id='tabs-3'>
                        <h4>Vehicle Extras</h4>

                        <div class="row">
                            <div class="col-sm-6">
                                <p>ABS</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Leather seats</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Power Assisted Steering</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Electric heated seats</p>
                            </div>
                            <div class="col-sm-6">
                                <p>New HU and AU</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Xenon headlights</p>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- ***** Fleet Ends ***** -->
@endsection