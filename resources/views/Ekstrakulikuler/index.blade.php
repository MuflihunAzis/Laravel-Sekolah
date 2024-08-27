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
            SMKN PAMPANG RAYA - Admin
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li class=""><a href="{{ route('admin.index') }}">Home</a></li>
            <li class=""><a href="{{ route('profile-madrasah') }}">Profile Madrasah</a></li>
            <li class=""><a href="{{ route('berita.index') }}">Berita</a></li>
            <li class="active"><a href="{{ route('esktrakulikuler.index') }}">Esktrakulikuler</a></li>
            <li class=""><a href="{{ route('gtpk.index') }}">GTPK</a></li>
            <li class=""><a href="{{ route('pendaftaran.index') }}">Pendaftaran</a></li>
            <li class=""><a href="{{ route('contact.index') }}">Contact</a></li>
            <li><a href="">Logout</a></li>
            </ul>
        </nav><!-- .nav-menu -->


        </div>
    </header><br><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h4>Ekstrakulikuler</h4>
            <ol>
            <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li>Ekstrakulikuler</li>
            </ol>
        </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about pt-3">
        <div class="text-center pb-4"><a href="{{ route('ekstrakulikuler.create')}}" class="btn btn-md btn-success">Tambah Data Ekstrakulikuler</a></div>
        <div class="container">
        <div class="row">
            @foreach($ekstrakulikuler as $data_ekskul)
            <div class="col-md-4">
            <div class="panel panel-default">

                <div class="panel-heading post-thumb">
                <img class="card-img-top" src="{{URL::to('/')}}/foto_ekstrakulikuler/{{$data_ekskul->foto}}" />
                </div>

                <div class="panel-body post-body">
                <a class="label label-default" href="#">{{$data_ekskul->nama}}</a>
                <p class="card-text">{{$data_ekskul->deskripsi}}</p>
                <div class="post-author">
                    <a href="{{route('ekstrakulikuler.edit', $data_ekskul->id)}}" class="btn btn-sm btn-primary">Edit Data</a>
                    <a href="{{route('ekstrakulikuler.delete', $data_ekskul->id)}}" class="btn btn-danger btn-sm my-1 mr-sm-1" onclick="return confirm('Hapus Data ?')"><i class="nav-icon fas fa-trash"></i>
                    Hapus Data</a>
                </div>
                </div>

            </div>
            </div>
            @endforeach
        </div>
        </div>
    </section><!-- End About -->

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
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.min.js"></script>

    <script>
        if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: successMessage,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6',
                });
            }
    </script>
</body>

</html>