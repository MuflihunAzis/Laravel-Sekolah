<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMKN PAMPANG RAYA | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Summernote -->
  <link href="/assets/summernote/summernote.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a class="navbar-brand mr-auto" href="#">
        <img src="{{ asset('logo_madrasah/'.$profile_madrasah->logo.'') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        SMKN PAMPANG RAYA
      </a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="{{ route('home.index') }}">Home</a></li>
          <li class="active"><a href="#berita">Berita</a></li>
          <li class="drop-down"><a href="">PPDB Online</a>
            <ul>
              <li><a href="#informasi_pendaftaran">Informasi Pendaftaran</a></li>
              <li><a href="{{ route('informasi-pendaftaran.index') }}" target="">Daftar Sekarang</a></li>
            </ul>
          </li>
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="portfolio-details-container">
        <img src="{{URL::to('/')}}/foto_berita/{{$berita->foto}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h3>Informasi Berita</h3>
          <ul>
            <li><strong>Judul</strong>: {{$berita->judul}}</li>
            <li><strong>Penulis</strong>: {{$berita->penulis}}</li>
            <li><strong>Diposting</strong>: {{$berita->created_at}}</li>
          </ul>
        </div>

      </div>

      <div class="portfolio-description">
        <h2>{{$berita->judul}}</h2>
        <p>
          {!!$berita->deskripsi!!}
        </p>
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        SMKN PAMPANG RAYA | <strong><span>2024</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Muflihun Azis</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

  <!-- Summernote -->
  <script src="/assets/summernote/js/summernote.min.js"></script>
  <!-- Summernote init -->
  <script src="/js/plugins-init/summernote-init.js"></script>

</body>

</html>
