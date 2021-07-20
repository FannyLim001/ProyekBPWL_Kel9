<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Detail Produk</title>

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
                            <li><a href="/" class="active">Beranda</a></li>
                            <li><a href="produk">Produk</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="tentang">Tentang Kami</a>
                                    <a class="dropdown-item" href="tim">Tim</a>
                                    <a class="dropdown-item" href="testimoni">Testimoni</a>
                                </div>
                            </li>
                            <li><a href="kontak">Kontak</a></li>
                            <li><a href="masuk">Masuk</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

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
                    </section>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- ***** Fleet Ends ***** -->

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