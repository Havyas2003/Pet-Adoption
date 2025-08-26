<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../functions.php';

// Check if logged in
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
    exit();
}

// Check if admin
if (!isAdmin()) {
    $_SESSION['msg'] = "You do not have access";
    header('location: ../user/main.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PetHub - Admin</title>

<!-- Favicons for Admin Pages -->
<link href="../assets/img/favicon.png" rel="icon" type="image/png">
<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 9876543210</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 9AM - 4PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <a href="main.php" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="main.php">Home</a></li>
          <li><a class="nav-link scrollto" href="users.php">Users</a></li>
          <li class="dropdown"><a href="#"><span>Adoption</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="adoptionListing.php">Adoption Listing</a></li>
              <li><a href="adoptionSubmission.php">Adoption Form</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-8 text-center">
        <h1>Welcome, <span><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span></h1>
        <h2>This is the Main Page for Admins!</h2>
      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PetHub</h3>
              <p>
                41, Moodabidri<br>
                Mangalore<br><br>
                <strong>Phone:</strong> +91 9876543210<br>
                <strong>Email:</strong> pethub@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Website Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="main.php">Admin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="adoptionListing.php">Adoption Listing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="adoptionSubmission.php">Adoption Form</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PetHub</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>
