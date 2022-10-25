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
            <a class="nav-link" href="result.php">Result</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    
<!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
  <div class="container card shadow p-5 mt-5">
    <h3 class="text-center pt-5">Data Alternatif</h3>
    <table class="table table-hover">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID Matrix</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>ID Bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "config.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT matrixkeputusan.idmatrix,alternatif.*,kriteria.*,bobot.idbobot,bobot.value,
            skala.value AS nilai,skala.keterangan FROM matrixkeputusan,skala,bobot,kriteria,
            alternatif WHERE matrixkeputusan.idalternatif=alternatif.idalternatif AND 
            matrixkeputusan.idbobot=bobot.idbobot AND matrixkeputusan.idskala=skala.idskala
            AND kriteria.idkriteria=bobot.idkriteria 
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['idmatrix']; ?></td>
                    <td><?php echo $p['idalternatif']; ?></td>
                    <td><?php echo $p['nmalternatif']; ?></td>
                    <td><?php echo $p['idkriteria']; ?></td>
                    <td><?php echo $p['nmkriteria']; ?></td>
                    <td><?php echo $p['idbobot']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['nilai']; ?></td>
                    <td><?php echo $p['keterangan']; ?></td>
                </tr>               
            <?php
                        }
            ?>
        </tbody>
    </table>

    <h3 class="text-center pt-5">Detail Normalisasi</h3>
    <table class="table table-hover">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID matrix</td>
                <td>ID alternatif</td>
                <td>Nama alternatif</td>
                <td>ID kriteria</td>
                <td>Nama kriteria</td>
                <td>ID bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Normalisasi</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "config.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT vmatrixkeputusan.*,(vmatrixkeputusan.nilai/nilaimax.maksimum) AS normalisasi
            FROM vmatrixkeputusan,nilaimax WHERE nilaimax.idkriteria=vmatrixkeputusan.idkriteria GROUP
            BY vmatrixkeputusan.idmatrix");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['idmatrix']; ?></td>
                    <td><?php echo $p['idalternatif']; ?></td>
                    <td><?php echo $p['nmalternatif']; ?></td>
                    <td><?php echo $p['idkriteria']; ?></td>
                    <td><?php echo $p['nmkriteria']; ?></td>
                    <td><?php echo $p['idbobot']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['nilai']; ?></td>
                    <td><?php echo $p['keterangan']; ?></td>
                    <td><?php echo $p['normalisasi']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>

    <h3 class="text-center pt-5">Detail Perangkingan</h3>
    <table class="table table-hover">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>Ranking</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "config.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT idalternatif,nmalternatif,SUM(prarangking) AS rangking FROM vprarangking
            GROUP BY idalternatif 
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['idalternatif']; ?></td>
                    <td><?php echo $p['nmalternatif']; ?></td>
                    <td><?php echo $p['rangking']; ?></td>
                </tr>               
            <?php
                        }
            ?>
        </tbody>
    </table>
    </div>
    </section>
  <!-- End Hero -->

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