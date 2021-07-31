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
            <form action="#" id="contact">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Used/New:</label>

                            <select>
                                <option value="">All</option>
                                <option value="new">New vehicle</option>
                                <option value="used">Used vehicle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Vehicle Type:</label>

                            <select>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Make:</label>

                            <select>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Model:</label>

                            <select>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 offset-sm-4">
                        <div class="main-button text-center">
                            <a href="#">Search</a>
                        </div>
                    </div>
                    <br>
                    <br>
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