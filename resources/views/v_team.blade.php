@extends('layout/v_user')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(template/user/assets/images/brochures.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2><em>Tim</em> Kami</h2>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('template')}}/user/assets/images/Fanny.png" alt="">
                    </div>
                    <div class="down-content">
                        <span>Ketua</span>
                        <h4>Fanny</h4>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('template')}}/user/assets/images/Zahrein.png" alt="">
                    </div>
                    <div class="down-content">
                        <span>Anggota</span>
                        <h4>M. Zahrein</h4>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('template')}}/user/assets/images/Toni.png" alt="">
                    </div>
                    <div class="down-content">
                        <span>Anggota</span>
                        <h4>Toni Renaldo</h4>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection