<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("location:login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <style type="text/css">
    .services .icon {
      position: absolute;
      left: 120px;
      top: calc(50% - -4px);
    }
  </style>

  <title>Arsip Digital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/download.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.9.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 style="color: white ;"><img src="./assets/img/logo.png" alt="" class="img-fluid"> E-ARSIP</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="dashboard.php">HOME</a></li>
          <li><a class="nav-link scrollto active" href="tampilansuratmasuk.php">SURAT MASUK</a></li>
          <li class="dropdown"><a href="#"><span>DAFTAR ARSIP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./DAFTAR ARSIP/tampildata.php">Surat Masuk</a></li>
              <li><a href="./DAFTAR ARSIP/tampilsuratkeluar.php">Surat Keluar</a></li>
              <li><a href="./DAFTAR ARSIP/tampilsuratkeputusan.php">Surat Keputusan</a></li>
              <li><a href="./DAFTAR ARSIP/tampilinventaris.php">Inventaris Barang</a></li>
              <li class="dropdown"><a href="#"><span>Administrasi</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="./DAFTAR ARSIP/tampiladministrasi.php">Pegawai</a></li>
              </ul>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PENGGUNA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><i class="bi bi-person bi-lg" ></i>  <?php echo $_SESSION['session_username']; ?></li>
              <li><a href="logout.php">Logout</a></li>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container" style="height: 38vh;">
          <h2 class="animate__animated animate__fadeInDown" style="font-size: 35px;">Welcome to <span>E-Arsip TunjungTirto</span></h2>
          <p class="animate__animated fanimate__adeInUp">Berisikan Dokumen Arsip Surat Masuk Penting Desa TunjungTirto</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Surat Masuk</a>
        </div>
      </div>


    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

    <!-- ======= Features Section ======= -->

    <!-- ======= Cta Section ======= -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" >
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Arsip Digital</h2>
          <p>Desa TunjungTirto</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b; position: absolute; left: 130px; top: calc(50% - -37px);"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampildata.php">Surat Masuk 2014</a></h4>
              <p class="description">Surat yang berisi tahun 2014</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;position: absolute; left: 130px; top: calc(50% - -37px);"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampildatathun.php">Surat Masuk 2015</a></h4>
              <p class="description">Surat yang berisi tahun 2015</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Administrasi</a></h4>
              <p class="description">Administrasi Perkantoran adalah penerapan manajemen 
                pada kantor, seperti perencanaan, pengorganisasian, penggerakkan, dan 
                pengawasan kantor agar tujuan kantor dapat tercapai 
                dan pegawai-pegawai merasa puas.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Barang Kantor</a></h4>
              <p class="description">Perabot kantor yaitu 
                Barang Kantor merupakan segala macam barang/benda kantor yang berfungsi sebagai penunjang terhdap pekerjaan kantor</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Surat Keputusan</a></h4>
              <p class="description">Surat keputusan adalah suatu pengakhiran dari proses pemikiran 
                tentang suatu masalah. 
                Hal ini untuk menjawab suatu pertanyaan apa yang harus 
                diperbuat guna mengatasi masalah tersebut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Pegawai</a></h4>
              <p class="description">Pegawai adalah setiap orang 
                yang bekerja dengan menjual tenaganya 
                (fisik dan pikiran) kepada perusahaan atau instansi dan 
                memperoleh balas jasa yang sesuai dengan perjanjian yang telah di sepakati.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Pricing Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="padding: 4px 0;">
    <div class="container">
      <h3>Kantor Desa TunjungTirto</h3>
      <p>Jl. Raya Bunut Wetan No.5, Bunder, Tanjungtirto, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153</p>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

      
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>