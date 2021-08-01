<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Vincent Motor</title>

    <link rel="stylesheet" type="text/css" href="{{asset('template')}}/user/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('template')}}/user/assets/css/font-awesome.css">

    <link rel="stylesheet" href="{{asset('template')}}/user/assets/css/style.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">Vincent<em> Motor</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/produk">Produk</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/tentang">Tentang Kami</a>
                                    <a class="dropdown-item" href="/tim">Tim</a>
                                    <a class="dropdown-item" href="/testimoni">Testimoni</a>
                                </div>
                            </li>
                            <li><a href="/kontak">Kontak</a></li>
                            @if(Auth::check() && Auth::user()->level=="admin")
                            <li><a href="/dashboard">Dashboard</a></li>
                            @endif
                            @if(Auth::check() && Auth::user()->level=="admin" || Auth::check() && Auth::user()->level=="member")
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name; }}</a>

                                <div class="dropdown-menu">
                                    @if(Auth::check() && Auth::user()->level=="member")
                                    <a class="dropdown-item" href="/cart">Keranjang</a>
                                    @endif
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                </div>
                            </li>
                            @else
                            <li><a href="/masuk">Masuk</a></li>
                            @endif
                </div>
                </li>
                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 Vincent Motor
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('template')}}/user/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{asset('template')}}/user/assets/js/popper.js"></script>
    <script src="{{asset('template')}}/user/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{asset('template')}}/user/assets/js/scrollreveal.min.js"></script>
    <script src="{{asset('template')}}/user/assets/js/waypoints.min.js"></script>
    <script src="{{asset('template')}}/user/assets/js/jquery.counterup.min.js"></script>
    <script src="{{asset('template')}}/user/assets/js/imgfix.min.js"></script>
    <script src="{{asset('template')}}/user/assets/js/mixitup.js"></script>
    <script src="{{asset('template')}}/user/assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="{{asset('template')}}/user/assets/js/custom.js"></script>

</body>

</html>