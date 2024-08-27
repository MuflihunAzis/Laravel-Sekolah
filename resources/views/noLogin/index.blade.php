<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> SMKN PAMPANG RAYA | Landing Page</title>
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
        <img src="{{ asset('logo_madrasah/'.$profile_madrasah->logo.'') }}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">SMKN PAMPANG RAYA
      </a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#berita">Berita</a></li>
          <li class="drop-down"><a href="#">Profil</a>
            <ul>
              <li><a href="#profile_madrasah">Tentang Sekolah</a></li>
              <li><a href="#ekstrakulikuler">Ekstrakulikuler</a></li>
              <li><a href="#gtk">Tenaga Pengajar</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">PPDB Online</a>
            <ul>
              <li><a href="#informasi_pendaftaran">Informasi Pendaftaran</a></li>
              <li><a href="{{ route('informasi-pendaftaran.index') }}" target="">Daftar Sekarang</a></li>
            </ul>
          </li>
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
          <h6>Di Website SMKN PAMPANG RAYA, Info tentang pendaftaran peserta didik baru, kunjungi laman pendaftaran dibawah.</h6>
          <div class="d-flex">
            <a href="{{ route('informasi-pendaftaran.index') }}" class="btn-get-started scrollto" target="">Daftar Sekarang</a>
            <a href="#informasi_pendaftaran" class="btn-watch-video scrollto">Informasi Pendaftaran <i class="icofont-info-circle"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Berita Section ======= -->
    <section id="berita" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span>Berita Terbaru</span>
          <h2>Berita Terbaru</h2>
        </div>

        <div class="owl-carousel testimonials-carousel">
          @foreach($berita_terbaru as $berita)
          <div class="panel panel-default px-2">
            <div class="panel-heading post-thumb">
              <img src="{{URL::to('/')}}/foto_berita/{{$berita->foto}}" class="testimonial-img" alt="">
            </div>
            <div class="panel-body post-body-berita">
              <h5><b>{{$berita->judul}}</b></h5>
              <h6>{{$berita->penulis}} - {{$berita->created_at->diffForHumans()}}</h6>
              <a href="/home/berita/{{$berita->id}}" target="_blank">Selengkapnya</a>
              <p>
                {!!substr($berita->deskripsi, 0, 220)!!}.....
              </p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>
    <!-- End Berita Section -->

    <!-- ======= Profile Madrasah Section ======= -->
    <section id="profile_madrasah" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('gambar_profile/'.$profile_madrasah->gambar.'') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Profil Sekolah</h3>
            <p>
              {{$profile_madrasah->deskripsi}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Profile Madrasah Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"> {{$profile_madrasah->jumlah_rombel}}</span>
            <p>Organisasi Siswa</p>
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
            <p>Staff</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="ekstrakulikuler" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Ekstrakulikuler</span>
          <h2>Ekstrakulikuler</h2>
          <p>Untuk mengembangkan minat dan bakat siswa di SMKN PAMPANG RAYA terdapat beberapa kegiatan ekstrakulikuler, diantaraya :</p>
        </div>

        <div class="row">
          @foreach($ekstrakulikuler as $data_ekskul)
          <div class="col-lg-4 col-md-6 d-flex mt-0 mt-md-0">
            <div class="bg-white">
              <img src="{{URL::to('/')}}/foto_ekstrakulikuler/{{$data_ekskul->foto}}" class="card-img-top w-80" alt="...">
              <div class="container mt-2">
                <h4><a href="">{{$data_ekskul->nama}}</a></h4>
                <p>{{$data_ekskul->deskripsi}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

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

    <!-- ======= Informasi Pendaftaran Section ======= -->
    <section id="informasi_pendaftaran" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 pl-5">
            <img src="assets/img/hero-img.png" width="350px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Informasi Pendafaran</h3>
            {!!$informasi_pendaftaran->deskripsi!!}

            @if ($informasi_pendaftaran->status==1)
            <a href="{{ route('informasi-pendaftaran.index') }}" class="btn btn-success" target="_blank" disabled>Daftar Sekarang</a>
            @else
            <a class="btn btn-danger disabled" aria-disabled="true">Pendaftaran Telah Ditutup</a>
            @endif
          </div>
        </div>

      </div>
    </section><!-- End Informasi Pendaftaran Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Kontak Kami</span>
          <h2>Kontak</h2>
          <p>Untuk informasi lebih lanjut, bisa menghubungi kontak kami di alamat berikut</p>
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

  </main><!-- End #main -->

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
