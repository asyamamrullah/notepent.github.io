<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NOTEPENT | HOME</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Base URL -->
    <base href="<?php echo base_url('assets')?>/">
    <!-- Favicons -->

    <link href="dist/vendor/img/favicon-32x32.png" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="dist/vendor/aos/aos.css" rel="stylesheet">
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="dist/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="dist/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="dist/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="dist/vendor/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <img src="dist/img/pancacita.png" alt="" width="" height="40">
                <img src="dist/img/kominfo.png" alt="" width="30">
                <img src="dist/img/notepent_logo2.png" alt="" width="" height="40">
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0 ">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li class="dropdown"><a href="#about"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#about">Tentang Aplikasi</a></li>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h4>Selamat Datang di</h4>
                        <h1>Website Aplikasi Laporan Penetration Testing</h1>
                        <p class="lead my-4">Website Aplikasi ini merupakan media publikasi data dan informasi terkait
                            hasil Penetration Testing yang disusun dan diterbitkan setiap tahun oleh Dinas Komunikasi,
                            Informatika dan Persandian Aceh.</p>
                        <a href="<?php echo base_url('Auth/login')?>" class="btn-get-started scrollto">Masuk</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-4 hero-img " data-aos="fade-left">
                    <img src="dist/img/Icon4.gif" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="dist/img/Icon5.gif" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <img src="dist/img/notepent_logo2.png" width="300px">
                            <p class="fst-italic py-2">
                                Tentang Website Aplikasi Laporan Hasil Penetration Testing :
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Media Publikasi Data & Informasi Terkait
                                    Penetration Testing</li>
                                <li><i class="bi bi-check-circle"></i> Layanan Penyedia Penetration Testing</li>
                            </ul>
                            <a href="<?php echo base_url('Auth/login')?>" class="btn btn-success">Ajukan Penetration Testing</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="tabelData" class="">
            <div class="container">
                <div class="section-title" data-aos="fade-down">
                    <h2>Data Hasil Penetration Testing</h2>
                    <div class="card">
                        <h5 class="card-header bg-primary text-white">Tabel Data Pentest</h5>
                        <div class="card-body">
                            <!-- Tombol Katakunci -->
                            <form action="" method="get">
                                <div class="input-group py-3">
                                    <input type="text" class="form-control" placeholder="Masukan Katakunci"
                                        value="<?php echo $katakunci?>" name="katakunci"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-success" type="submit" id="cari">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- Tabel Data -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead class="text-center bg-secondary">
                                        <tr class="">
                                            <th rowspan="2">Id User</th>
                                            <th rowspan="2">Pemohon</th>
                                            <th rowspan="2">Tanggal</th>
                                            <th rowspan="2">URL Target</th>
                                            <th rowspan="2">Nama Instansi</th>
                                            <th colspan="3">Penanggung Jawab</th>
                                            <th rowspan="2">IP Address</th>
                                            <th rowspan="2">Status Hosting</th>
                                            <th colspan="3">Hasil Pentest</th>
                                            <th rowspan="2">Keterangan</th>

                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Kontak</th>
                                            <th>High</th>
                                            <th>Medium</th>
                                            <th>Low</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                foreach($dataPentest as $k => $v) { 
                                $nomor = $nomor + 1;
                                ?>
                                        <tr>
                                            <td><?php echo $v ['kd_pentest'] ?></td>
                                            <td><?php echo $v ['pemohon'] ?></td>
                                            <td><?php echo $v ['tanggal'] ?></td>
                                            <td><?php echo $v ['url_target'] ?></td>
                                            <td><?php echo $v ['nama_in'] ?></td>
                                            <td><?php echo $v ['p_jawab'] ?></td>
                                            <td><?php echo $v ['p_email'] ?></td>
                                            <td><?php echo $v ['p_no'] ?></td>
                                            <td><?php echo $v ['ip_addres'] ?></td>
                                            <td><?php echo $v ['status_hg'] ?></td>
                                            <td><?php echo $v ['h_high'] ?></td>
                                            <td><?php echo $v ['h_med'] ?></td>
                                            <td><?php echo $v ['h_low'] ?></td>
                                            <td><?php echo $v ['ket'] ?></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <?php
                        $linkPagination = $pager->links();
                        $linkPagination = str_replace('<li class="active">','<li class="page-item active">',$linkPagination);
                        $linkPagination = str_replace('<li>','<li class="page-item">', $linkPagination);
                        $linkPagination = str_replace("<a","<a class='page-link'",$linkPagination);
                        echo $linkPagination;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Web Developer Team</h2>
                    <p>Website Aplikasi ini dirancang oleh Mahasiswa Magang Universitas Gajah Putih Takengon Program
                        Studi Teknik Informatika, yang dibimbing langsung oleh pembimbing lapangan Bapak Bustamam,
                        S.Kom., M.M dari Dinas Komunikasi Informatika dan Persandian Aceh, dengan judul projek "Website
                        Aplikasi Laporan Hasil Penetration Testing" </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in">
                            <div class="pic"><img src="dist/vendor/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Juanda</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="dist/vendor/img/team/dedel2.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Adellia Divandariga S.</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="dist/vendor/img/team/asyam.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Asyam Amrullah AR.</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 align-items-center" data-aos="fade-up">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-browser-chrome"></i>
                                <h4>Website :</h4>
                                <p>
                                    <a href="https://diskominfo.acehprov.go.id/">https://diskominfo.acehprov.go.id/</a>
                                </p>

                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon :</h4>
                                <p> (0651) 22221</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15884.406414291801!2d95.3199677!3d5.5519536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040374f7ab59885%3A0xf044456dc88d677e!2sDinas%20Komunikasi%2C%20Informatika%20dan%20Persandian%20Aceh!5e0!3m2!1sid!2sid!4v1696518688921!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="dist/img/notepent_logo2.png" alt="" width="200px">
                        <div class="footer-info p-3">
                            <p> <strong>Dinas Komunikasi, Informatika dan Persandian Aceh</strong><br>
                                Jl. STA Mahmudsyah No 14, Kampung Baru, Baiturrahman, Kota Banda Aceh, 23243<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>2023</span></strong> Dinas Komunikasi, Informatika dan Persandian Aceh
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
                <a href="https://ugp.ac.id/">Mahasiswa Magang UGP</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="dist/vendor/aos/aos.js"></script>
    <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="dist/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="dist/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="dist/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="dist/vendor/js/main.js"></script>

</body>

</html>