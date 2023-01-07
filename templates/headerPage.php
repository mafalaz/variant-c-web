<?php
//include auth_session.php file on all user panel pages
require("../login/db.php");
include("../login/auth_session.php");
?>
{% load static %}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid Predictor By Variant'C</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Form CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism.min.css">
    <link rel="stylesheet" href="{% static 'css/bootstrap-image-checkbox.css' %}">

  <!-- Favicons -->
  <link href="{% static 'assets/img/apple-touch-icon.png' %}" rel="icon">
  <link href="{% static 'assets/img/apple-touch-icon.png' %}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{% static 'assets/vendor/bootstrap/css/bootstrap.min.css' %}" rel="stylesheet ">
  <link href="{% static 'assets/vendor/icofont/icofont.min.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/boxicons/css/boxicons.min.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/venobox/venobox.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/animate.css/animate.min.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/remixicon/remixicon.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/owl.carousel/assets/owl.carousel.min.css' %}" rel="stylesheet">
  <link href="{% static 'assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css' %}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{% static 'assets/css/style.css' %}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Covid Predictor By Variant'C</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
{#          <li class="drop-down"><a href="">Drop Down</a>#}
{#            <ul>#}
{#              <li><a href="#">Drop Down 1</a></li>#}
{#              <li class="drop-down"><a href="#">Deep Drop Down</a>#}
{#                <ul>#}
{#                  <li><a href="#">Deep Drop Down 1</a></li>#}
{#                  <li><a href="#">Deep Drop Down 2</a></li>#}
{#                  <li><a href="#">Deep Drop Down 3</a></li>#}
{#                  <li><a href="#">Deep Drop Down 4</a></li>#}
{#                  <li><a href="#">Deep Drop Down 5</a></li>#}
{#                </ul>#}
{#              </li>#}
{#              <li><a href="#">Drop Down 2</a></li>#}
{#              <li><a href="#">Drop Down 3</a></li>#}
{#              <li><a href="#">Drop Down 4</a></li>#}
{#            </ul>#}
{#          </li>#}
          <li><a style="background-color: red;" href="../login/logout.php" class="appointment-btn scrollto">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto" >Welcome, <?php echo $_SESSION['username']; ?>!</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>COVID Predictor</h1>
      <h2>Powered by Machine Learning Algorithm</h2>
      <a href="#appointment" class="btn-get-started scrollto">Get Predictions</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa menggunakan COVID Predictor?</h3>
              <p>
                Diagnosis dini sangat penting untuk mencegah perkembangan penyakit yang dapat membahayakan nyawa manusia.
                Aplikasi web ini dapat digunakan untuk memprediksi keberadaan COVID-19 menggunakan Gejala COVID-19 jika tidak
                  tersedia alat tes COVID-19, atau sambil menunggu Hasil Tes PCR atau Swab.
              </p>
              <div class="text-center">
                <a target="_blank" href="https://www.mdpi.com/1999-4893/14/7/201" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-body"></i>
                    <h4>Gejala Covid-19</h4>
                    <p>COVID-19 memengaruhi orang yang berbeda dengan cara yang berbeda. Sebagian besar orang yang terinfeksi akan mengalami penyakit ringan hingga sedang dan sembuh tanpa rawat inap.</p>
                    <div class="text-center">
                <a target="_blank" href="https://www.who.int/health-topics/coronavirus#tab=tab_3" class="more-btn">Read More</a>
              </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bxs-bell-ring"></i>
                    <h4>Saran WHO untuk Publik</h4>
                    <p>Tetap aman dengan menjaga jarak fisik, memakai masker, menjaga ruangan tetap berventilasi baik, menghindari keramaian, membersihkan tangan, dan batuk ke siku atau tisu yang tertekuk.</p>
                    <div class="text-center">
                        <a target="_blank" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="more-btn">Read More</a>
                      </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-stats"></i>
                    <h4>WHO (COVID-19) Dashboard</h4>
                    <p>Organisasi Kesehatan Dunia (WHO) memperbarui publik mengenai jumlah kasus yang dikonfirmasi, kasus kematian dan total dosis vaksin yang diberikan.</p>
                      <div class="text-center">
                <a target="_blank" href="https://covid19.who.int" class="more-btn">Dashboard</a>
              </div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Appointment Section ======= -->

        {% block content%}
        {% endblock %}


     <!-- End Appointment Section -->


<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Covid Predictor By Variant'C</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{% static 'assets/vendor/jquery/jquery.min.js' %}"></script>
  <script src="{% static 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' %}"></script>
  <script src="{% static 'assets/vendor/jquery.easing/jquery.easing.min.js' %}"></script>
  <script src="{% static 'assets/vendor/php-email-form/validate.js' %}"></script>
  <script src="{% static 'assets/vendor/venobox/venobox.min.js' %}"></script>
  <script src="{% static 'assets/vendor/waypoints/jquery.waypoints.min.js' %}"></script>
  <script src="{% static 'assets/vendor/counterup/counterup.min.js' %}"></script>
  <script src="{% static 'assets/vendor/owl.carousel/owl.carousel.min.js' %}"></script>
  <script src="{% static 'assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js' %}"></script>

  <!-- Template Main JS File -->
  <script src="{% static 'assets/js/main.js' %}"></script>

</body>

</html>