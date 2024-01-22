<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Travel">

    <!-- ========== Page Title ========== -->
    <title>PT AL FAZAR Tours Haji dan Umrah</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= url('/') ?>/front/img/logotravel.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="front/css/bootstrap.min.css" rel="stylesheet" />
    <link href="front/css/font-awesome.min.css" rel="stylesheet" />
    <link href="front/css/flaticon-set.css" rel="stylesheet" />
    <link href="front/css/themify-icons.css" rel="stylesheet" />
    <link href="front/css/magnific-popup.css" rel="stylesheet" />
    <link href="front/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="front/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="front/css/animate.css" rel="stylesheet" />
    <link href="front/css/bootsnav.css" rel="stylesheet" />
    <link href="front/style.css" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="front/js/html5/html5shiv.min.js"></script>
      <script src="front/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border-none navbar-fixed navbar-transparent white bootsnav"
            style="background-color: #FFFFFF;">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="front/img/logoputih.png" class="logo logo-display" alt="Logo">
                        <img src="front/img/Logoputih.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- style="color-text:0C356A; -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu" style="color: #0C356A;">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= url('/') ?>" style="color: #0C356A;">Beranda</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/haji.html" style="color: #0C356A;">Haji</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/umroh.html" style="color: #0C356A;">Umroh</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/gallery.html" style="color: #0C356A;">Gallery</a>
                        </li>
                        {{-- <li>
                            <a href="<?= url('/') ?>/daftar.html" style="color: #0C356A;">Pendaftaran</a>
                        </li> --}}
                        <li>
                            <a href="<?= url('/') ?>/jadwal.html" style="color: #0C356A;">Jadwal</a>
                        </li>
                        <li>
                            <a href="login.html" style="color: #0C356A;">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel content-less text-light top-pad text-dark slide animate_text"
            data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <!-- <div class="item active bg-cover" style="background-image: url(front/img/2440x1578.png);"> -->
                <div class="item active bg-cover" style="background-image: url(front/img/FotoMekkah.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">

                                            <h2 data-animation="animated fadeInLeft">
                                                {{ $profile->nama_travel }}</strong>
                                            </h2>
                                            <a data-animation="animated fadeInDown"
                                                class="btn btn-light border btn-md" href="/login.html">Login</a>
                                            <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md"
                                                href="/daftar.html">Pendaftaran</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url(front/img/Fotodimekah.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            {{-- <h4 data-animation="animated fadeInUp">Upgrade your knowledge</h4>
                                            <h2 data-animation="animated fadeInLeft">Learn From Best Online
                                                <strong>Training Course</strong>
                                            </h2>
                                            <a data-animation="animated fadeInDown"
                                                class="btn btn-light border btn-md" href="#">Learn More</a>
                                            <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md"
                                                href="#">View Courses</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- End Banner -->
    <section>
        <div class="blog-area default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="site-heading text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 style="color: #0C356A;">PT AL FAZAR Tours Haji dan Umrah</h2>
                            <p>
                                Pada halaman ini ada info terkait travel Haji dan Umroh.
                            </p>
                        </div>
                    </div>
                </div>

    </section>

    <!-- Start Blog
    ============================================= -->
    <section class="pt-md-9" id="service">

        <div class="container">
            {{-- <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
                <img {{-- src="{{ asset('front/img/shape.svg') }}" style="max-width: 200px" alt="{{ mine()['title'] }}" /> 
            </div> --}}
            <div class="mb-7 site-heading text-center">

                <h2 style="color: #0C356A;">
                    Kenapa Harus Alfazar
                    {{-- {{ mine()['longTitle'] }} --}}
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card service-card h-100 shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body h-100 p-xxl-5 p-4"> <img src="{{ asset('front/img/true.png') }}"
                                width="75" alt="Easy Ordering" />
                            <h3 class="mb-3 mt-1">Berizin Resmi</h3>
                            <p class="mb-0 fw-medium">PT. Alfazar Umrah Tours Telah Memimiliki izin
                                Terdaftar di
                                Kementrian Agama Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card service-card h-100 shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body h-100 p-xxl-5 p-4"> <img src="{{ asset('front/img/money.png') }}"
                                width="75" alt="Cheap Price" />
                            <h3 class="mb-3 mt-1">Berangkat Sesuai Jadwal
                            </h3>
                            <p class="mb-0 fw-medium">PT. Alfazar Tours Travel Haji dan Umrah melakukan
                                perjalanan
                                umrah setiap 3 bulan sekali
                                dan di pastikan jemaah berangkat tepat waktu sesuai jadwal yang telah di
                                tetapkan,
                                untuk menjaga ketertiban dan kelancaran spiritual anda</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card service-card h-100 shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body h-100 p-xxl-5 p-4"> <img src="{{ asset('front/img/true.png') }}"
                                width="75" alt="Easy Ordering" />
                            <h3 class="mb-3 mt-1">Biaya Hemat</h3>
                            <p class="mb-0 fw-medium">Kami mengutamakan kenyamanan dan kekhusyuan dalam
                                ibadah para
                                jemaah kami.
                                Fasilitas yang nyaman dan lingkungan yang tenang menciptakan suasana ibadah
                                yang
                                khusyuk dan nyaman
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card service-card h-100 shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body h-100 p-xxl-5 p-4"> <img src="{{ asset('front/img/money.png') }}"
                                width="75" alt="Cheap Price" />
                            <h3 class="mb-3 mt-1">Hotel Dekat Sesuai Kelasnya
                            </h3>
                            <p class="mb-0 fw-medium">Biro Umrah Alfazar tours menawarkan
                                paket umrah dengan harga yang terjangkau, tanpa mengorbankan kualitas
                                layanan dan
                                fasilitas yang diberikan</p>
                        </div>
                    </div>
                </div>


            </div><!-- end of .container-->
            <div class="container">

                <div class="col-12 col-sm- col-xl-4 mb-4">
                    <div class="card service-card h-100 shadow-hover rounded-3 text-center align-items-center mx-auto">
                        <div class="card-body h-100 p-xxl-5 p-4">
                            <img src="{{ asset('front/img/money.png') }}" width="75" alt="Cheap Price" />
                            <h3 class="mb-3 mt-1">Ibadah Nyaman dan Khusyu</h3>
                            <p class="mb-0 fw-medium">Biro Umrah Alfazar tours menawarkan
                                paket umrah dengan harga yang terjangkau, tanpa mengorbankan kualitas
                                layanan
                                dan
                                fasilitas yang diberikan</p>
                        </div>
                    </div>
                </div>

            </div><!-- end of .row -->
        </div><!-- end of .container -->


    </section>

    <div class="row">
        <div class="blog-items">
            @foreach ($agenda as $value)
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i>
                                        <?= date_format(date_create($value->tanggal), 'd F Y') ?></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="#">{{ $value->judul }}</a>
                                </h4>
                                <p>
                                    {{ $value->isi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            @endforeach
        </div>
    </div>
    </div>
    </div>
    <!-- End Blog -->
    <br />
    <br />
    <br />
    <br />



    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-color: #0C356A;">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="#">PT AL FAZAR Tours
                                Haji dan
                                Umroh</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/whatsapp.png" alt=""
                                    style="width: 32px;height: 32px;">
                                <a
                                    href="https://api.whatsapp.com/send/?phone=6282119893012&text&type=phone_number&app_absent=0">+6282119893012</a>
                            </li>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/instagram.png" alt=""
                                    style="width: 32px;height: 32px;">
                                <a href="https://www.instagram.com/alfazartourstravel?igsh=MTJseXBxdGg0dXU3eA==">PT
                                    AL
                                    FAZAR Tours Haji dan
                                    Umroh</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="front/js/jquery-1.12.4.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/equal-height.min.js"></script>
    <script src="front/js/jquery.appear.js"></script>
    <script src="front/js/jquery.easing.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/modernizr.custom.13711.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/wow.min.js"></script>
    <script src="front/js/progress-bar.min.js"></script>
    <script src="front/js/isotope.pkgd.min.js"></script>
    <script src="front/js/imagesloaded.pkgd.min.js"></script>
    <script src="front/js/count-to.js"></script>
    <script src="front/js/YTPlayer.min.js"></script>
    <script src="front/js/loopcounter.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/bootsnav.js"></script>
    <script src="front/js/main.js"></script>

</body>

</html>
