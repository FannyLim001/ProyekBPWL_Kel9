@extends('layout/v_user')
@section('content')

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2><em>Produk </em>Kami</h2>
                    <p>Kami menyediakan produk sparepart motor yang berkualitas dan terjangkau</p>
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
        <br>

        <div class="contact-form">
            <form action="" id="contact">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Merk:</label>

                            <select id="filter-merk" class="form-control">
                                <option value="">--All--</option>
                                @foreach ($barang as $b )
                                <option value="{{ $b->id_barang }}">{{ $b->merk_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Harga:</label>

                            <select id="filter-harga" class="form-control">
                                <option value="">--All --</option>
                                @foreach ($harga as $h )
                                <option value="{{ $b->id_barang }}">{{ $h->harga_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Kategori:</label>

                            <select>
                                <option value="">-- All --</option>
                                @foreach ($kategori as $k)
                                <option value="{{ $b->id_barang }}">{{ $k->kategori_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Stok:</label>

                            <select>
                                <option value="">-- All --</option>
                                @foreach ($stok as $s )
                                <option value="{{ $b->id_barang }}">{{ $s->stok_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 offset-sm-4">
                        <div class="main-button text-center">
                            <a href="#">Search</a>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <div class="row">
                @foreach ($barang as $b )
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="foto_barang/{{ $b->gambar }}" alt="foto barang">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rp.</sup> {{ $b->harga_barang }}
                            </span>

                            <h4>{{ $b->nama_barang }}</h4>

                            <p>
                                <i class="fa fa-shopping-cart"></i> {{ $b->stok_barang }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{ $b->kategori_barang }} &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="/detail_produk/{{ $b-> id_barang }}">+ Lihat Produk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>

        </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection