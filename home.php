<?php include 'koneksi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OneSmile - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO_ONE_SMILE_NO_TEXT.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- fonts -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">

  <!-- Owl Carousel -->
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style3.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar" data-aos="fadeInUp">
    <div class="container-icon">
      <a href="home.php">
        <img class="primary-icon" src="assets/img/LOGO_ONE_SMILE_FINAL.png">
      </a>
    </div>
    <ul class="nav-list" id="navi-list">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="jobs.php">Jobs</a></li>
      <li class="search-icon">
        <form action="/search-page.php">
          <input type="text" placeholder="Search">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>   
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

  <!-- ======= Header Banner Section ======= -->
  <div class="banner-home-area" data-aos="fade-in">
      <div class="container-fluid">

      </div>
  </div>
  <!-- End Banner 1 -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-in">
            <img src="assets/img/Phone_screen.png">
          </div>
          <div class="col-xl-7 align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100"><b><i>OneSmile</i></b> Feature</h3>
              <p data-aos="fade-in">
                Melalui Onesmile pengguna dapat melihat BSD City Directory, berbagi informasi kepada tetangga di sekitar mereka, mendapatkan informasi yang terupdate dan akurat, chat langsung ke Customer Care, serta adanya wadah untuk melakukan transaksi jual-beli, sehingga diharapkan dapat memperbesar peluang bisnis dengan mempertemukan penjual dan potensial pembeli di BSD City.
              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <img src="assets/img/icon-menu/billing.png">
                  <h4><a href="#">Billing</a></h4>
                  <p class="clearfix">Fitur ini berisi detail tagihan air/IPL, Metode pembayaran, dan cara-cara pembayaran dari masing-masing channel.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <img src="assets/img/icon-menu/market.png">
                  <h4><a href="#">Market</a></h4>
                  <p class="clearfix">Fitur ini berisi lapak dari warga (warga yang memiliki bisnis / Usaha).</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/icon-menu/community.png">
                  <h4><a href="#">Community</a></h4>
                  <p class="clearfix">Fitur ini berisi Group Cluster dan Group Komunitas <br><br>
                    <b>Cluster :</b><br>
                    Moderator / Admin Group dapat berbagi informasi seputar kegiatan di dalam Cluster, info seputar pembuatan surat menyurat, info kas / pembukuan warga Cluster.<br><br>
                    <b>Umum :</b><br>
                    Moderator / Admin Group dapat berbagi informasi tentang hobby, investasi, food & travel. dan lainnya. <br><br>
                    Jam Operasional : 09.00 - 17.00 WIB
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <img src="assets/img/icon-menu/resident-care.png">
                  <h4><a href="#">Resident Care</a></h4>
                  <p class="clearfix">Fitur direct ke Customer Care<br>
                    <b>Live Chat</b><br>
                    <b>Email</b>, akan terhubung ke<br>
                    customer.care@sinarmasland.com<br>
                    <b>Telp</b>, akan terhubung ke call center Sinar Mas Land<br>
                    021 50380000 <br><br>
                    Jam Operasional : 09.00 - 17.00 WIB<br>
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <img src="assets/img/icon-menu/city-guide.png">
                  <h4><a href="#">City Guide</a></h4>
                  <p class="clearfix">Berisi list nomor telepon / tempat-tempat penting berikut Directory di BSD City. (Rumah Sakit terdekat, PLN, Pemadam Kebakaran, Kantor Polisi, dan lainnya).<br><br>
                    <b>Kategori :</b><br>Apotek, Bank, Daycare, Elektronik & Furniture, Fashion, Food & Beverage, Hobby, Salon & Kecantikan, Sekolah, Universitas, Rumah Sakit, Puskesmas & Klinik, Shopping Mall, Pasar Tradisional, dan lainnya.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <img src="assets/img/icon-menu/bulletin.png">
                  <h4><a href="#">Bulletin</a></h4>
                  <p class="clearfix">
                    <b>Sinar Mas Land</b><br>Berisi seputar Corporate Sinar Mas Land mulai dari launching produk baru, marketing campaign, seputar
                  kegiatan CHR & President Office<br><br>
                    <b>Food & Travel</b><br>Seputar makanan, Restaurant, cafe, tempat nongkrong, dan tempat hiburan<br><br>
                    <b>Health & Lifestyle</b><br>Seputar kesehatan dan gaya hidup<br><br>
                    <b>Bisnis</b><br><br>
                    <b>Seputar Info & Entertainment</b><br>Info seputar directory di BSD City (bengkel 24 jam dan lainnya).<br><br>
                    <b>Sport & Music</b><br>
                  </p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- News Section -->
    <section id="news" class="news section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Berita Terbaru</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div id="news-slider" class="owl-carousel">
            <?php 
            
            // fungsi query untuk menampilkan data dari tabel artikel
            $query = mysqli_query($mysqli, "SELECT * FROM artikel ORDER BY id_artikel DESC")
                    or die('Ada kesalahan pada query tampil Data artikel: '.mysqli_error($mysqli));

                    while ($data = mysqli_fetch_assoc($query)){
                    ?>
                    
                    <div class="news-grid" data-aos="fade-in">
                    <a href="content.php?single=<?php echo $data['id'];?>">
                      <div class="news-grid-image"> <img src="../../Aplikasi-Porta-Berita-Berbasis-Web/portal/admin/images/<?php echo $data['foto'];?>" alt="">
                        <div class="news-grid-box">
                          <h1>1</h1>
                          <p>Mar</p>
                        </div>
                      </div>
                    </a>
                    
                    <div class="news-grid-txt">
                      <span>Kuliner</span>
                      <h2><?php echo $data['judul'];?></h2>
                      <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $data['tgl_artikel'];?></li>
                        <li><i class="fa fa-user" aria-hidden="true">Admin</i></li>
                      </ul>
                      
                      <p><?php echo substr($data['isi'],0,200);?>...</p>
                    </div>
                  </div>
                  <?php } ?>   
              
            </div>
          </div>
        </div>
      </div>  
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Our Partners</h2>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/cupten-cafe.png" class="img-fluid" alt="Cupten Cafe" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/dutch-boba.png" class="img-fluid" alt="Dutch Boba" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/gion.png" class="img-fluid" alt="Gion" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/honu.png" class="img-fluid" alt="Honu" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/imoto-izakaya.png" class="img-fluid" alt="Imoto Izakaya" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/jeruk-meletus.PNG" class="img-fluid" alt="Jeruk Meletus" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/katsukita.png" class="img-fluid" alt="Katsukita" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/kotomono.png" class="img-fluid" alt="Kotomono" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/la-baia.png" class="img-fluid" alt="La Baia" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/lapan-pagi.PNG" class="img-fluid" alt="Lapan Pagi" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/leko.png" class="img-fluid" alt="Leko" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/moji.png" class="img-fluid" alt="Moji" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/fore.png" class="img-fluid" alt="Fore" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/nasi-bali-men-sri.png" class="img-fluid" alt="Nasi Bali Men Sri" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/No-background/wangfu-dimsum.png" class="img-fluid" alt="Wangfu Dimsum" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Banner 2 Section ======= -->
  <div class="banner-footer-area">
    <div class="container-fluid">
      
    </div>
  </div>
  <!-- End Banner 2 -->
     
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jl. Grand Boulevard, BSD City Tangerang, Banten, Indonesia 15345</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+6221-50588221<br>+6221-50368368</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <a href="home.php">
            <img class="footer-icon" src="assets/img/LOGO_ONE_SMILE_FINAL.png">
          </a>
        </div>
      </div>
      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>OneSmile</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer>
  <!-- End Footer -->

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
  <script src="assets/fontawesome/css/all.css"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#news-slider").owlCarousel({
                items:3,
                navigation:true,
                navigationText:["",""],
                autoPlay:true
            });
        });
    </script>
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        navigation:true,
        navigationText:["",""],
        autoPlay:true,
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
  </script>
  <script type="text/javascript">
    const toggleButton = document.getElementById('toggleButton');
    const naviList = document.getElementById('navi-list');

    toggleButton.addEventListener('click',() => {
        naviList.classList.toggle('active');
    })
</script>
  

</body>

</html>