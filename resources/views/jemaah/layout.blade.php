<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Diri</title>

    <link rel="icon" href="<?= url('/') . '/back/gambar/Logotravel.png' ?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/sweetalert/dist/sweetalert2.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8iZkLong/sLdB63SDf84ont+jiS" crossorigin="anonymous">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= url('/') . '/back/gambar/Logotravel.png' ?>"
                alt="PT Alfazar Tours Travel Haji dan Umroh " height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= url('/') . '/logout.html' ?>" class="nav-link">Logout</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= url('/') . '/back/gambar/Logotravel.png' ?>" alt="AdminLTE Logo" class="brand-image">
                <span class="brand-text font-weight-light">Alfazar Travel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= url('/') . '' ?>/back/dist/img/user-solid.png" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"></i>{{ $nama }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= url('/') . '/jemaah/biodata.html' ?>"
                                class="nav-link <?= $activemenu == 'biodata' ? 'active' : '' ?>">
                                <i class="nav-icon nav-icon fas fa-database"></i>
                                <p>
                                    Data Diri
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="<?= url('/') . '/jemaah/berkas.html' ?>"
                                class="nav-link <?= $activemenu == 'berkas' ? 'active' : '' ?>">
                                <i class="nav-icon nav-icon fas fa-file"></i>
                                <p>
                                    Berkas
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="<?= url('/') . '/jemaah/alamat.html' ?>"
                                class="nav-link <?= $activemenu == 'alamat' ? 'active' : '' ?>">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    Alamat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url('/') . '/jemaah/passport.html' ?>"
                                class="nav-link <?= $activemenu == 'passport' ? 'active' : '' ?>">
                                <i class="fas fa-passport"></i>
                                <p>
                                    Passport
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url('/') . '/jemaah/keberangkatan.html' ?>"
                                class="nav-link <?= $activemenu == 'keberangkatan' ? 'active' : '' ?>">
                                <i class="nav-icon nav-icon fas fa-plane-departure"></i>

                                <p>
                                    Keberangkatan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 Travel.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= url('/') ?>/back/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= url('/') ?>/back/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= url('/') ?>/back/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->

    <!-- DataTables  & Plugins -->
    <script src="<?= url('/') ?>/back/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/jszip/jszip.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Select2 -->
    <script src="<?= url('/') ?>/back/plugins/select2/js/select2.full.min.js"></script>

    <!-- JQVMap -->
    <script src="<?= url('/') ?>/back/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= url('/') ?>/back/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= url('/') ?>/back/plugins/moment/moment.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= url('/') ?>/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= url('/') ?>/back/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->

    <script src="<?= url('/') ?>/back/dist/sweetalert/dist/sweetalert2.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('#tanggal').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        })
    </script>

    <?php if ($activemenu == 'biodata') : ?>
    <script src="<?= url('/') ?>/back/js/biodata.js"></script>
    <?php if ($activemenu == 'passport') : ?>
    <script src="<?= url('/') ?>/back/js/passport.js"></script>
    <?php if ($activemenu == 'alamat') : ?>
    <script src="<?= url('/') ?>/back/js/alamat .js"></script>
    <?php elseif ($activemenu == 'berkas') : ?>
    <script src="<?= url('/') ?>/back/js/berkas.js"></script>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>

</body>

</html>
