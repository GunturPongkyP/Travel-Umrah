<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Travel">

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
        <nav class="navbar navbar-default attr-border-none navbar-fixed navbar-transparent white bootsnav"
            style="background-color: #ffffff;">

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

    <section>
        <div class="blog-area default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="site-heading text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 style="color: #0C356A;">Jadwal Keberangkatan</h2>
                            {{-- <p>
                                Pada halaman ini ada info terkait travel Haji.
                            </p> --}}
                            <section>
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Keberangkatan</th>
                                                        <th>Kepulangan</th>
                                                        <th>Paket</th>
                                                        <th>Maskapai</th>
                                                        <th>Seat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>22 Nov 2023</td>
                                                        <td>01 Des 2023</td>
                                                        <td>Umrah 10 Hari</td>
                                                        <td>Saudia</td>
                                                        <td>20 / 35</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>22 Nov 2023</td>
                                                        <td>01 Des 2023</td>
                                                        <td>Umrah 10 Hari</td>
                                                        <td>Saudia</td>
                                                        <td>20 / 35</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>22 Nov 2023</td>
                                                        <td>01 Des 2023</td>
                                                        <td>Umrah 10 Hari</td>
                                                        <td>Saudia</td>
                                                        <td>20 / 35</td>
                                                        
                                                    </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>22 Nov 2023</td>
                                                            <td>01 Des 2023</td>
                                                            <td>Umrah 10 Hari</td>
                                                            <td>Saudia</td>
                                                            <td>20 / 35</td>
                                                            
                                                        </tr>
                                                    <!-- Add more rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </section>
    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-color: #0C356A;">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="#">PT AL FAZAR Tours Haji
                                dan
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
