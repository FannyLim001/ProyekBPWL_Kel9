@extends('layout/v_user')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Hubungi kami <em>sekarang</em></h2>
                    <p>Anda dapat menghubungi kami melalui alternatif berikut</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>HUBUNGI <em> KAMI</em></h2>
                    <img src="{{asset('template')}}/user/assets/images/line-dec.png" alt="waves">

                </div>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>

                <h5><a href="#">+62 813-7295-6484</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>

                <h5><a href="#">vincentmotor@gmail.com</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <h5>Jl. Jend. Sudirman, Duri, Riau</h5>

                <br>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8308825256213!2d101.19591011445871!3d1.2747496621679493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d37b7a3ce663d3%3A0x5304c1807be91415!2sVincent%20Motor!5e0!3m2!1sen!2sid!4v1625900063950!5m2!1sen!2sid" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="contact-form section-bg" style="background-image: url(template/user/assets/images/contact-1-720x480.jpg)">
                    <form id="contact" action="/pesan/store" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="nama" type="text" id="name" placeholder="Nama" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subjek" type="text" id="subject" placeholder="Subjek" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="pesan" rows="6" id="message" placeholder="Pesan" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Kirim Pesan</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
@endsection