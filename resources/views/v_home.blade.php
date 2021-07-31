@extends('layout/v_user')
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('template')}}/user/assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Selamat datang di</h6>
            <h2>Servis <em>Bengkel</em> Andalanmu!</h2>
            <div class="main-button">
                <a href="kontak">Kontak kami</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Product Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Produk <em>kami</em></h2>
                    <img src="{{asset('template')}}/user/assets/images/line-dec.png" alt="">
                    <p>Selain melakukan servis kendaraan motor, kami juga menyediakan produk sparepart dan pendukung motor seperti oli, ban, dan banyak lainnya</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($barang as $b)
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="foto_barang/{{ $b->gambar }}" alt="foto_barang">
                    </div>
                    <div class="down-content">
                        <span>
                            <sup>Rp.</sup>{{ $b->harga_barang }}
                        </span>

                        <h4>{{ $b->nama_barang }}</h4>

                        <p>
                            <i class="fa fa-shopping-cart"></i> {{ $b->stok_barang }} &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> {{ $b->kategori_barang }} &nbsp;&nbsp;&nbsp;
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br>

        <div class="main-button text-center">
            <a href="produk">Lihat Produk</a>
        </div>
    </div>
</section>
<!-- ***** Product Ends ***** -->

<section class="section section-bg" id="schedule" style="background-image: url(template/user/assets/images/about-fullscreen-1-1920x700.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Tentang <em>Kami</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Kami menyediakan jasa servis motor dan produk kendaraan motor berkualitas yang mendukung kebutuhan anda</p>
                </div>
            </div>
        </div>
</section>

<!-- ***** Testimonials Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2><em>Testimoni</em> toko kami</h2>
                    <img src="{{asset('template')}}/user/assets/images/line-dec.png" alt="waves">
                    <p>Berikut ialah testimoni dari pelanggan kami yang sudah menggunakan layanan dan membeli produk dari vincent motor</p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('template')}}/user/assets/images/features-first-icon.png" alt="First One">
                        </div>
                        <div class="right-content">
                            <h4>Ratna</h4>
                            <p><em>"Pelayanan Vincent Motor itu sangat profesional dan memuaskan. Mekanik langsung dari bengkel resmi dan kita dapat konsultasi dengan gratis."</em></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('template')}}/user/assets/images/features-first-icon.png" alt="second one">
                        </div>
                        <div class="right-content">
                            <h4>Danu</h4>
                            <p><em>"Vincent Motor memberikan kemudahan, dalam melakukan servis. tak perlu pergi ke bengkel mekanik bisa datang ke rumah. "</em></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('template')}}/user/assets/images/features-first-icon.png" alt="fourth muscle">
                        </div>
                        <div class="right-content">
                            <h4>Budiman</h4>
                            <p><em>"Barang-barang disini sangat sesuai dengan dompet namun berkualitas, pelayanannya juga ramah. Wajib dicoba jika ada di Duri!"</em></p>
                        </div>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('template')}}/user/assets/images/features-first-icon.png" alt="second one">
                        </div>
                        <div class="right-content">
                            <h4>Putri</h4>
                            <p><em>"Jasa servisnya bagus dan tidak terlalu mahal, sangat cocok untuk para pelajar. Hanya pemasangan sparepart juga masih dalam batas wajar harga jasanya"</em></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <br>

        <div class="main-button text-center">
            <a href="testimoni">Read More</a>
        </div>
    </div>
</section>
<!-- ***** Testimonials Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(template//user/assets/images/brochures.jpg)">
    <div class=" container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Hubungi <em>Kami</em></h2>
                    <p>Pesan jadwal pickup atau jadwal order servis dan barang.</p>
                    <div class="main-button">
                        <a href="kontak">Kontak kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->
@endsection