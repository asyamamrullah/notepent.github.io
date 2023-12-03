<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOTEPENT</title>

    <!-- Google Font: Source Sans Pro -->
    <base href="<?php echo base_url('assets')?>/">
    <link href="dist/vendor/img/favicon-32x32.png" rel="icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/fakeLoader.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="fakeLoader"></div>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://diskominfo.acehprov.go.id/" role="button"><img src="dist/img/pancacita.png"
                            width="36px"></a>
                    <a href="https://diskominfo.acehprov.go.id/" role="button"><img src="dist/img/kominfo.png"
                            width="26px"></a>
                </li>
                <li class="nav-item d-none d-md-inline-block items-center">
                    <a href="https://diskominfo.acehprov.go.id/" class="nav-link">
                        <h6><b>Dinas Komunikasi, Informatika dan Persandian Aceh</b></h6>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Fullscreen Start -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- Fullscreen end -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/notepent_white.png" alt="NOTEPENT Logo" class="brand-image" style="">
                <span class="brand-text font-weight-light"><b>NOTE</b>PENT</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/pancacita.png" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo site_url('TabelUSer')?>"
                            class="d-block"><?= session()->get('nama_user')?></a>
                        <a href="<?php echo site_url('TabelUSer')?>"> <i class="fas fa-circle fa-xs"
                                style="color: #29a720;"></i> <?php if (session()->get('level') == 1) {
                        echo 'Admin';
                        } else if (session()->get('level')== 2) {
                        echo 'User' ;
                        } else {
                        echo 'Guest';
                        } ?>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!--menu admin-->
                        <?php if (session()->get('level')== 1) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Web')?>"
                                class="nav-link <?php echo $menu=='dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item <?php echo $menu=='form tambah data' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?php echo $menu=='form tambah data' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('FormTambahData')?>"
                                        class="nav-link <?php echo $submenu=='tambah data' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Data Pentest</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="nav-item <?php echo $menu=='tabel' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?php echo $menu=='tabel' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelPentest')?>"
                                        class="nav-link <?php echo $submenu=='tabel pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Data Pentest</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelDataPemohon')?>"
                                        class="nav-link <?php echo $submenu=='tabel data pemohon' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Data Pemohon</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelDataInstansi')?>"
                                        class="nav-link <?php echo $submenu=='tabel data instansi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Daftar Instansi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelUser')?>"
                                        class="nav-link <?php echo $submenu=='tabel user' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo $menu=='report' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?php echo $menu=='report' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('MenuReportPentest')?>"
                                        class="nav-link <?php echo $submenu=='menu report pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cetak Laporan Pentest</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('MenuReportUser')?>"
                                        class="nav-link <?php echo $submenu=='menu report user' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cetak Laporan User</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('DaftarPengajuanPentest')?>"
                                        class="nav-link <?php echo $submenu=='pengajuan pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Pengajuan Pentest</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?php echo $menu=='report' ? 'menu-open' : '' ?>">
                            <div class="nav-link ">
                                <?php } ?>

                                <!--menu user-->
                                <?php if (session()->get('level')== 2) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin')?>"
                                class="nav-link <?php echo $menu=='dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $menu=='tabel' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?php echo $menu=='tabel' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelPentest')?>"
                                        class="nav-link <?php echo $submenu=='tabel pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Data Pentest</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelDataPemohon')?>"
                                        class="nav-link <?php echo $submenu=='tabel data pemohon' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Data Pemohon</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelDataInstansi')?>"
                                        class="nav-link <?php echo $submenu=='tabel data instansi' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Daftar Instansi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('TabelUser')?>"
                                        class="nav-link <?php echo $submenu=='tabel user' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo $menu=='report' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?php echo $menu=='report' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('MenuReportPentest')?>"
                                        class="nav-link <?php echo $submenu=='menu report pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cetak Laporan Pentest</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('MenuReportUser')?>"
                                        class="nav-link <?php echo $submenu=='menu report user' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cetak Laporan User</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('DaftarPengajuanPentest')?>"
                                        class="nav-link <?php echo $submenu=='pengajuan pentest' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Pengajuan Pentest</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?php echo $menu=='report' ? 'menu-open' : '' ?>">
                            <div class="nav-link ">
                                <?php } ?>


                                <a href="<?= base_url('auth/logout')?>"><i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                            </div>
                        </li>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <?php
            if ($page) {
                echo view($page);
            }
            ?>
            <!-- isi Content end -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Mahasiswa Magang UGP</a>.</strong> All rights
            reserved.
            <div class="float-right ">
                <b>Version</b> 3.2.0
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


    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- FakeLoader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="dist/js/fakeLoader.min.js"></script>


    <script>
    $(document).ready(function() {
        $.fakeLoader({
            bgColor: '#3498db',
            spinner: "spinner6"
        });
    });
    </script>
</body>

</html>