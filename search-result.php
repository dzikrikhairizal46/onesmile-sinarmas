<?php include 'koneksi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Single Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO_ONE_SMILE_NO_TEXT.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- fonts -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar" data-aos="fadeInUp">
    <div class="container-icon">
      <a href="">
        <img class="primary-icon" src="assets/img/LOGO_ONE_SMILE_FINAL.png">
      </a>
    </div>
    <ul class="nav-list" id="navi-list">
      <li><a href="home.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="jobs.php">Jobs</a></li>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <label class="icon">
          <span class="fa fa-search"></span>
        </label>
      </li>
    </ul>
    <div class="menu" id="toggleButton">
      <div>
        <div class="menu-line"></div>
        <div class="menu-line"></div>
        <div class="menu-line"></div>
      </div>
    </div>
  </nav>

  

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Kuliner</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

     <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <?php
        $id=$_GET['single'];

        $query = mysqli_query($mysqli, "SELECT * FROM artikel WHERE id='$id'")
            or die('Ada kesalahan pada query tampil Data artikel: '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)){
            $judul = $data['judul'];
            $isi = $data['isi'];
            $sub_foto1 = $data['sub_foto1'];
            $sub_judul1 = $data['sub_judul1'];
            $sub_deskripsi1 = $data['sub_deskripsi1'];
            $sub_foto2 = $data['sub_foto2'];
            $sub_judul2 = $data['sub_judul2'];
            $sub_deskripsi2 = $data['sub_deskripsi2'];
            $sub_foto3 = $data['sub_foto3'];
            $sub_judul3 = $data['sub_judul3'];
            $sub_deskripsi3 = $data['sub_deskripsi3'];
            $sub_foto4 = $data['sub_foto4'];
            $sub_judul4 = $data['sub_judul4'];
            $sub_deskripsi4 = $data['sub_deskripsi4'];
            $sub_foto5 = $data['sub_foto5'];
            $sub_judul5 = $data['sub_judul5'];
            $sub_deskripsi5 = $data['sub_deskripsi5'];
            $sub_foto6 = $data['sub_foto6'];
            $sub_judul6 = $data['sub_judul6'];
            $sub_deskripsi6 = $data['sub_deskripsi6'];
            }
        ?>

        <div class="section-title">
          <h2 data-aos="fade-in"><?php echo $judul;?></h2>
          <p data-aos="fade-in"><?php echo $isi;?></p>
        </div>
        
        
        <div class="row content">
          <div class="col-md-5 pt-4" data-aos="fade-right">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto1;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3><?php echo $sub_judul1;?></h3>
            <p>
            <?php echo $sub_deskripsi1;?>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2 pt-5" data-aos="fade-left">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto2;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3><?php echo $sub_judul2;?></h3>
            <p>
            <?php echo $sub_deskripsi2;?>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 pt-4" data-aos="fade-right">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto3;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3><?php echo $sub_judul3;?></h3>
            <p>
            <?php echo $sub_deskripsi3;?>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2 pt-5" data-aos="fade-left">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto4;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3><?php echo $sub_judul4;?></h3>
            <p>
            <?php echo $sub_deskripsi4;?>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 pt-4" data-aos="fade-right">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto5;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3><?php echo $sub_judul5;?></h3>
            <p>
            <?php echo $sub_deskripsi5;?>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2 pt-5" data-aos="fade-left">
            <img src="../../Aplikasi Portal Berita Berbasis Web (PHP)/portal/admin/images/sub-artikel/<?php echo $sub_foto6;?>" class="img-fluid" alt="" width="400">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3><?php echo $sub_judul6;?></h3>
            <p>
            <?php echo $sub_deskripsi6;?>
            </p>
          </div>
        </div>


        
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="media">
              <a href="https://onesmile.sinarmasland.com/">
                 <img src="assets/img/LOGO_ONE_SMILE_FINAL.png" alt="Sinarmas Land" width="250">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>OneSmile - Sinarmas Land</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>