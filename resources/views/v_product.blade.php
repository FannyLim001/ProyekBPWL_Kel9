<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Produk</title>

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
                            <li><a href="produk" class="active">Produk</a></li>
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
            <div class="contact-form">
                <form action="#" id="contact">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Tipe Motor:</label>

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
                                <label>Merek:</label>

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
                                <label>Harga:</label>

                                <select>
                                    <option value="">-- All --</option>
                                    <option value="">-- All --</option>
                                    <option value="">-- All --</option>
                                    <option value="">-- All --</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Kategori produk:</label>

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
                                <a href="#">Cari</a>
                            </div>
                        </div>
                        <br>
                        <br>
                </form>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('template')}}/user/assets/images/product-1-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="detail_produk">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <nav>
            <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

        </div>
    </section>
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