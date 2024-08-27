<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$profile_madrasah->nama}} | Leanding Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
        <a class="navbar-brand mr-auto" href="#">
            <img src="{{ asset('logo_madrasah/'.$profile_madrasah->logo.'') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            {{$profile_madrasah->nama}}
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li class="active"><a href="#hero">Home</a></li>
            <li class="drop-down"><a href="#">Profile</a>
                <ul>
                <li><a href="#gtk">Guru & Tenaga Kependidikan</a></li>
                </ul>
            </li>
            <li><a href="#informasi_pendaftaran">Pendaftaran</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Selamat Datang</h1>
                <h2>Di Website {{ $profile_madrasah->nama }}, untuk pendaftaran peserta didik baru silahkan klik tombol Unduh Berkas dibawah ini, untuk mengunduh file formulir pendaftaran.</h2>
                <div class="d-flex">
                  <a href="{{ route('unduh-berkas') }}" class="btn-get-started scrollto" target="">Unduh Berkas</a>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
              </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Informasi Pendaftaran Section ======= -->
        <section id="informasi_pendaftaran" class="about">
            <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 pl-5">
                <img src="assets/img/hero-img.png" width="350px">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Informasi Pendafaran</h3>
                {!!$informasi_pendaftaran->deskripsi!!}<br><br>
                <a href="{{ route('unduh-berkas') }}" class="btn btn-success" target="_blank">Unduh Berkas</a>
                </div>
            </div>
            </div>
        </section><!-- End Informasi Pendaftaran Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"> {{$profile_madrasah->jumlah_rombel}}</span>
                <p>Rombongan Belajar</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"> {{$profile_madrasah->jumlah_siswa}}</span>
                <p>Siswa</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"> {{$profile_madrasah->jumlah_guru}}</span>
                <p>Guru</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up"> {{$profile_madrasah->jumlah_tendik}}</span>
                <p>Tenaga Kependidikan</p>
                </div>

            </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Team Section ======= -->
        <section id="gtk" class="team section-bg">
            <div class="container">

            <div class="section-title">
                <span>Guru & Tenaga Kependidikan</span>
                <h2>Guru & Tenaga Kependidikan</h2>
            </div>

            <div class="row">
                @foreach($gurutendik as $gtk)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{URL::to('/')}}/foto_gurutendik/{{$gtk->foto}}" alt="" width="100px">
                    <h4>{{$gtk->nama}}</h4>
                    <span>{{$gtk->jabatan}}</span>
                    <p>
                    {{$gtk->motto}}
                    </p>
                    <div class="social">
                    <a><i class="icofont-twitter"> {{$gtk->twitter}}</i></a>
                    <a><i class="icofont-facebook"> {{$gtk->facebook}}</i></a>
                    <a><i class="icofont-instagram"> {{$gtk->instagram}}</i></a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
                <p>Untuk informasi lebih lanjut, bisa menghubungi contact berikut</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>{{$contact->email}}</p>
                    </div>

                    <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Telpon/HP:</h4>
                    <p>{{$contact->telpon}}</p>
                    </div>

                    <div class="phone">
                    <i class="icofont-instagram"></i>
                    <h4>Instagram:</h4>
                    <p>{{$contact->instagram}}</p>
                    </div>

                    <div class="phone">
                    <i class="icofont-facebook"></i>
                    <h4>Facebook:</h4>
                    <p>{{$contact->facebook}}</p>
                    </div>
                    <div class="phone">
                    <i class="icofont-twitter"></i>
                    <h4>Twitter:</h4>
                    <p>{{$contact->twitter}}</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-7 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Alamat:</h4>
                    <p></p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.837663895358!2d119.47920857439593!3d-5.129835551905403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcca2887e13f%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1723562549548!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>

            </div>

            </div>
        </section>
        <!-- End Contact Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
        <div class="copyright">
            Madrasah PNUP | <strong><span>2024</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
