<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sekolah">

    <!-- ========== Page Title ========== -->
    <title>PT AL FAZAR Tours</title>

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
        <nav class="navbar navbar-default attr-border-none navbar-fixed navbar-transparent white bootsnav" style="background-color: #38B6FF;">

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
                    <a class="navbar-brand" href="index.html">
                        <img src="front/img/logotravelbg.png" class="logo logo-display" alt="Logo">
                        <img src="front/img/logotravelbg.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/profile.html">Profil</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/agenda.html">Kegiatan</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/daftar.html">Pendaftaran</a>
                        </li>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(front/img/fotodimekah.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Profile Travel</h1>
                    <h3>Pada halaman ini menjelaskan tentang profil travel {{ $profile->nama_travel }}</h3>
                    <h4>Setiap muslim tentu ingin menjalankan ibadah umroh dan haji ke Baitullah karena begitu banyaknya
                        keutamaan dan pahala yang begitu besar. Sesuai dengan hadis Nabi “Ibadah umrah ke ibadah umrah
                        berikutnya adalah penggugur (dosa) di antara keduanya, dan haji yang mabrur tiada balasan (bagi
                        pelakunya) melainkan surga” (HR al-Bukhari dan Muslim).

                        Perjalanan ibadah Umroh dan Haji tentu bukan ibadah yang sederhana karena selain melakukan
                        perjalnan yang jauh, juga ada tata aturan ibadah sesuai dengan sunah dan contoh nabi, selain itu
                        perlu panduan agar bisa nyaman dalam ibadah di Baitullah. </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h3>Selamat Datang di {{ $profile->nama_travel }}</h3>

                        <blockquote>
                            {{ $profile->deskripsi }}
                        </blockquote>
                    </div>

                    <div class="equal-height col-md-12 col-sm-12">
                        <div class="item malachite">
                            <a href="#">
                                <div class="icon">
                                    <i class="ti-map"></i>
                                </div>
                                <div class="info">
                                    <h4>Alamat : {{ $profile->alamat }}</h4>
                                    <br>
                                    <h4>Email : {{ $profile->email }}</h4>
                                    <br>
                                    <h4>Telepon : {{ $profile->telepon }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="equal-height col-md-6 col-sm-6">
                                <div class="item malachite">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-desktop"></i>
                                        </div>
                                        <div class="info">
                                            <h2>689</h2>
                                            <h4>Scholarship</h4>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End About -->


    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-color: #0C356A;">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="#">PT AL FAZAR Tours Haji dan
                                Umroh</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/whatsapp.png" alt="" style="width: 32px;height: 32px;">
                                <a href="https://api.whatsapp.com/send/?phone=6282119893012&text&type=phone_number&app_absent=0">+6282119893012</a>
                            </li>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/instagram.png" alt="" style="width: 32px;height: 32px;">
                                <a href="https://www.instagram.com/alfazartourstravel?igsh=MTJseXBxdGg0dXU3eA==">PT AL
                                    FAZAR Tours Haji dan
                                    Umroh</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer Bottom -->
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