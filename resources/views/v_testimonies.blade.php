@extends('layout/v_user')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2><em>Testimoni</em> toko kami</h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Testimonials Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
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
    </div>
</section>
<!-- ***** Testimonials Item End ***** -->
@endsection