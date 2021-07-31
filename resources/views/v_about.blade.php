@extends('layout/v_user')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Tentang <em>kami</em></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>

                    <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content'>

                    <article id='tabs-2'>
                        <img src="{{asset('template')}}/user/assets/images/about-image-2-940x460.jpg" alt="">
                        <h4>Pekerjaan Kami</h4>
                        <h5>Menyediakan jasa servis motor berkualitas</h5>
                        <p>Untuk mendapatkan layanan servis kendaraan, maka anda dapat langsung menghubungi kami pada halaman kontak dan memesan
                            jadwal servis yang diinginkan. Pemesanan jadwal dapat dipilih dari pergi ke tempat servis langsung atau tim kami akan ke tempat anda untuk melakukan layanan</p>
                        <h5>Produk kendaraan yang terjangkau</h5>
                        <p>Semua produk yang dijual merupakan produk berkualitas dari setiap supplier dengan harga yang merakyat namun
                            kualitas tidak sembarangan</p>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Hubungi <em>kami</em></h2>
                    <p>Pesan jadwal pickup atau jadwal order servis dan barang.</p>
                    <div class="main-button">
                        <a href="contact">Hubungi kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->
@endsection