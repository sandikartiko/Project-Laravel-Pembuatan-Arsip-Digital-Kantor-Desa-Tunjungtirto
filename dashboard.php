
<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 

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
  <link href="./assets/css/style.css" rel="stylesheet">
  <style>
    #header.header-scrolled {
  background: rgb(137 11 27);
}
.testimonials .testimonial-item .testimonial-img {
  width: 71px;
  border-radius: 0%;
  border: 4px solid #fff;
  margin: 0 auto;
}
  </style>


  <!-- =======================================================
  * Template Name: Selecao - v4.9.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top d-flex align-items-center header-transparent header-scrolled" >
    <div class="container d-flex align-items-center justify-content-between"  >

      <div class="logo">
        <h1 style="color: white ;"><img src="logo3.png" alt="" class="img-fluid"> E-ARSIP</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="dashboard.php">HOME</a></li>
          <li class="dropdown"><a href="#"><span>DAFTAR ARSIP</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./DAFTAR ARSIP/tampildata.php">Surat Masuk</a></li>
              <li><a href="./DAFTAR ARSIP/tampilsuratkeluar.php">Surat Keluar</a></li>
              <li><a href="./DAFTAR ARSIP/tampilsuratkeputusan.php">Surat Keputusan</a></li>
              <li><a href="./DAFTAR ARSIP/tampilinventaris.php">Inventaris Barang</a></li>
              <li><a href="./DAFTAR ARSIP/tampilaperdes.php"><span>Peraturan Desa</span> <i></i></a>
              <li><a href="./DAFTAR ARSIP/tampilkades.php"><span>Peraturan Kades</span> <i></i></a>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PENGGUNA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><i class="bi bi-person bi-lg" ></i>  <?php echo $_SESSION['session_username']; ?></li>
              <li><a href="logout.php">LogOut</a></li>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center" style=" background: linear-gradient(127deg, rgb(137 11 27) 0%, rgb(202 10 10) 100%);
">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container" style="height: 38vh;">
          <h2 class="animate__animated animate__fadeInDown" style="font-size: 35px;">SELAMAT DATANG <span>e-ARSIP TUNJUNGTIRTO</span></h2>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">E-Arsip</a>
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
    <?php
        include "koneksi.php";
        $suratmasuk = mysqli_query($kon,"SELECT * FROM suratmasuk");
        $suratkeluar = mysqli_query($kon,"SELECT * FROM suratkeluar");
        $suratkeputusan = mysqli_query($kon,"SELECT * FROM suratkeputusan");
        $inventarisbarang = mysqli_query($kon,"SELECT * FROM inventarisbarang");
        $perdes= mysqli_query($kon,"SELECT * FROM perdes");
        $perkades= mysqli_query($kon,"SELECT * FROM perkades");
 
        // menghitung data barang
        $jumlah_surat = mysqli_num_rows($suratmasuk); 
        $jumlah_suratkeluar = mysqli_num_rows($suratkeluar); 
        $jumlah_suratkeputusan = mysqli_num_rows($suratkeputusan);
        $jumlah_inventarisbarang = mysqli_num_rows($inventarisbarang); 
        $jumlah_perdes = mysqli_num_rows($perdes); 
        $jumlah_perkades = mysqli_num_rows($perkades); 
       
        ?>
    <section id="services" class="services" >
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Arsip Digital</h2>
          <p>Desa TunjungTirto</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-briefcase" style="color: #ff689b; font-size: 58px;" ></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampildata.php"> Surat Masuk :  <?php echo $jumlah_surat; ?></a></h4>
              <p class="description">Surat yang 
                diterima dari instansi lain maupun perorangan, baik yang diterima 
                melalui pos maupun yang diterima melalui kurir.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-book" style="color: #e9bf06;font-size: 58px;"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampilsuratkeluar.php">Surat Keluar :  <?php echo $jumlah_suratkeluar; ?></a></h4>
              <p class="description">Surat keluar adalah surat yang sudah lengkap 
                bertanggal, bernomor, berstempel, dan telah ditandatangani.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-binoculars" style="color:#41cf2e; font-size: 58px;"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampilinventaris.php">Barang Kantor :  <?php echo $jumlah_inventarisbarang; ?></a></h4>
              <p class="description">Perabot kantor yaitu 
                Barang Kantor merupakan segala macam barang/benda kantor yang berfungsi sebagai penunjang terhdap pekerjaan kantor</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon" style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-globe" style="color: #d6ff22; font-size: 58px;"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampilsuratkeputusan.php">Surat Keputusan  :  <?php echo $jumlah_suratkeputusan; ?></a></h4>
              <p class="description">Surat keputusan adalah suatu pengakhiran dari proses pemikiran 
                tentang suatu masalah. 
                Hal ini untuk menjawab suatu pertanyaan apa yang harus 
                diperbuat guna mengatasi masalah tersebut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-clock" style="color: #4680ff;font-size: 58px;"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampilaperdes.php">Peraturan Desa :  <?php echo $jumlah_perdes; ?></a></h4>
              <p class="description">peraturan desa adalah setiap orang 
                yang bekerja dengan menjual tenaganya 
                (fisik dan pikiran) kepada perusahaan atau instansi dan 
                memperoleh balas jasa yang sesuai dengan perjanjian yang telah di sepakati.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon" style="position: absolute; left:4px ;  top : calc(50% - 40px);"><i class="bi bi-globe" style="color: #d6ff22; font-size: 58px;"></i></div>
              <h4 class="title"><a href="./DAFTAR ARSIP/tampilkades.php">Peraturan Kades  :  <?php echo $jumlah_perkades; ?></a></h4>
              <p class="description">Peraturan Kepala Desa adalah Peraturan Perundang-undangan yang ditetapkan oleh Kepala Desa yang bersifat mengatur dalam rangka melaksanakan Peraturan dan
                 Peraturan Perundang-Undangan yang lebih tinggi.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Desa TunjungTirto Kecamatan Singosari Kabupaten Malang</h2>
          <p>TENTANG KAMI</p>
        </div>
        <p>Desa Tunjungtirto merupkan salah satu dari 17 Desa yang berada di Kecamatan Singosari Kabupaten Malang. Terbagi dalam 8 (Delapan) Pedusunan dan 13 RW serta 60 RT. Kondisi geografis termasuk dataran rendah namun banyak terdapat lembah dan jurang di masing-masing Dusunnya. Desa Tunjungtirto terletak di 112° 38,25” BT 07° 54,20” LS dan berada pada ketinggian 487 mdl dengan tekstur tanah yang berjenis lempungan dengan tingkat kemiringan tanah 125 derajat. Luas wilayah Desa Tunjungtirto ± 369 Ha. Jarak tempuh dari desa ke kecamatan ± 15 menit, sedangkan jarak tempuh dari desa ke Kabupaten Malang adalah ± 60 menit.</p>


        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
           
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Institut Teknologi Nasional Malang disingkat ITN Malang merupakan sebuah perguruan tinggi swasta bidang teknologi di Malang, Jawa Timur, Indonesia. Institut Teknologi Nasional Malang berawal dengan nama Akademik Teknik Nasional Malang yang didirikan pada tahun 1969. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="itn.jpg" class="testimonial-img" alt="">
                <h3>ITN</h3>
                <h4>UNiversity</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sekolah Tinggi Informatika dan Komputer Indonesia Malang, disingkat STIKI, adalah sebuah perguruan tinggi yang bergerak di bidang Informatika pertama di Jawa Timur dan didirikan di kota Malang tahun 1985, 
                  Indonesia. Kampus utamanya terletak di bagian Barat dari Malang, Jawa Timur
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="stiki.png" class="testimonial-img" alt="">
                <h3>STIKI</h3>
                <h4>Unirversity</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Desa Tunjungtirto merupkan salah satu dari 17 Desa yang berada di Kecamatan Singosari Kabupaten Malang. Terbagi dalam 8 (Delapan) Pedusunan dan 13 RW serta 60 RT.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="logo3.png" class="testimonial-img" alt="" style="width: 71px;">
                <h3>KANTOR DESA TUNJUNGTIRTO</h3>
                <h4>Jl. Raya Bunut Wetan No.5, Bunder, Tanjungtirto, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="padding: 4px 0; background: rgb(137 11 27) ;">
  <br>
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