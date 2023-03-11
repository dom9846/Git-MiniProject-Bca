<?php
     include("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SeekYourJob|Employ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="x-icon" href="/seekyourjob/assets/icon/logo.png">
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="/seekyourjob/assets/css/employreg.css" rel="stylesheet">
  <link href="/seekyourjob/employ/assets/css/cards.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- disable back button -->

  <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
  </script>

   <!-- disable back button -->

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $row['fname']?> <?php echo $row['sname']?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/seekyourjob/employ/employ.php#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="/seekyourjob/employ/employ.php#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="/seekyourjob/employ/employ.php#complaints" class="nav-link scrollto"><i class="bi bi-send-exclamation"></i><span>Complaints Around Me</span></a></li>
          <li><a href="/seekyourjob/employ/employ.php#inbox" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Inbox</span></a></li>
          <li><a href="/seekyourjob/employ/employ.php#works" class="nav-link scrollto"><i class="bi bi-pencil-square"></i> <span>My works</span></a></li>
          <li><a href="/seekyourjob/index.php" class="nav-link scrollto"><i class="bi bi-box-arrow-left"></i><span>Log out</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->