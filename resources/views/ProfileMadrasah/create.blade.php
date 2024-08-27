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
            <li class="active"><a href="{{ route('profile-madrasah') }}">Profile Madrasah</a></li>
            <li class="drop-down"><a href="#">Info</a>
                <ul>
                <li><a href="#">Buat</a></li>
                <li><a href="#">Edit</a></li>
                <li><a href="#"></a></li>
                </ul>
            </li>
            <li class="drop-down"><a href="">PPDB Online</a>
                <ul>
                <li><a href="#">Informasi Pendaftaran</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="">Logout</a></li>
            </ul>
        </nav><!-- .nav-menu -->


        </div>
    </header><br><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h4>Buat Profile Sekolah</h4>
            <ol>
            <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li><a href="{{ route('profile-madrasah') }}">Profile Sekolah</a></li>
            <li>Buat Profile</li>
            </ol>
        </div>
        <section id="contact" class="contact pt-3 pb-3">
            <form action="{{ route('profilemadrasah.store') }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('post')
            <div class="form-group">
                <label for="nama">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" required>
                <div class="validate"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="jumlah_rombel">Jumlah Rombongan Belajar</label>
                <input type="number" class="form-control" name="jumlah_rombel" id="jumlah_rombel" value="{{ old('jumlah_rombel') }}" required />
                <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                <label for="jumlah_siswa">Jumlah Siswa</label>
                <input type="number" name="jumlah_siswa" class="form-control" id="jumlah_siswa" value="{{ old('jumlah_siswa') }}" required />
                <div class="validate"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="jumlah_guru">Jumlah Guru</label>
                <input type="number" class="form-control" name="jumlah_guru" id="jumlah_guru" value="{{ old('jumlah_guru') }}" required />
                <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                <label for="jumlah_tendik">Jumlah Tenaga Kependidikan</label>
                <input type="number" name="jumlah_tendik" class="form-control" id="validationTooltip05" value="{{ old('jumlah_tendik') }}" required />
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" data-rule="minlen:20" data-msg="Deskripsi minimal 20 karakter" required>{{ old('deskripsi') }}</textarea>
                <div class="validate"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="gambar">Gambar</label>
                <div style="position:relative;">
                    <a class='btn btn-primary' href='javascript:;'>
                    Pilih File
                    <input id="gambar" name="gambar" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-gambar-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-gambar-info">{{ old('gambar') }}</span>
                </div>
                </div>
                <div class="form-group col-md-6">
                <label for="logo">Logo Sekolah</label>
                <div style="position:relative;">
                    <a class='btn btn-primary' href='javascript:;'>
                    Pilih File
                    <input id="logo" name="logo" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-logo-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-logo-info">{{ old('logo') }}</span>
                </div>
                </div>
            </div>
            <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
            </form>
        </section><!-- End Contact Section -->
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                SMKN PAMPANG RAYA
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
