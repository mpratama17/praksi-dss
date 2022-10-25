<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
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
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">HOME<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Data List</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="dtalternatif.php">Data Alternatif</a></li>
              <li><a href="dtkriteria.php">Data Kriteria</a></li>
              <li><a href="dtbobot.php">Data Bobot</a></li>
              <li><a href="dtmatrix.php">Data Matrix</a></li>
              <li><a href="dtskala.php">Data Skala</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Insert Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="formalternatif.php">Form Data Alternatif</a></li>
              <li><a href="formkriteria.php">Form Data Kriteria</a></li>
              <li><a href="formbobot.php">Form Data Bobot</a></li>
              <li><a href="formmatrix.php">Form Data Matrix</a></li>
              <li><a href="formskala.php">Form Data Skala</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="result.php">Result</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    
<!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container card shadow p-5 mt-5">
    <a href='formalternatif.php' class="btn btn-dark ml-auto text-white col-sm-2">Tambah</a>
    <br>
    <table class="table table-hover">
        <tr>
            <thead>
                <td>ID Bobot</td>
                <td>ID Kriteria</td>
                <td>Value</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "config.php";
            $a="SELECT * from bobot";
            $b=$conn->query($a);
            while($c=$b->fetch_array()){ ?>
            <tr>
                <th><?php echo $c['idbobot']; ?></th>
                <th><?php echo $c['idkriteria']; ?></th>
                <th><?php echo $c['value']; ?></th>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
  </section><!-- End Hero -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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