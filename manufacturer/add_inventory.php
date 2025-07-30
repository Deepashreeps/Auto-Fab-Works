<?php
include 'config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Add Inventory - AutoFab Works</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="testimonials-page">

<?php include "header.php" ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/head1.webp);">
      <div class="container position-relative">
        <h1>Add Inventory</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Testimonials Section -->
    <section class="testimonials-12 testimonials section" id="testimonials">
      <!-- Section Title -->
      <div class="main-container fadeIn animated" style="margin-left:250px;">
<div class="container">
  <div class="row">
    <div class="col-md-7 col-sm-12 col-form">
      <form action="controller/inventory.php" method="post" >
        <div class="row">
          <div class="form-group col-md-6">
            <input type="text" name="m_name" class="form-control" placeholder="Employee Name*" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." required>
          </div>
          </br>
        </div></br>
        <div class="form-group" style="margin-bottom: 20px;">
          <textarea type="text" name="inv" rows="5" class="form-control" placeholder="Add Inventory*" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." required></textarea>
        </div>
    </div>	
    
    <div class="form-group">
      <button type="submit"  name="sub" class="btn btn-primary pull-right">SUBMIT</button>
    </div>

    <div class="clearfix"></div>
      </form>
    </div>
  </div> <!-- /.row -->
</div>
</div>
    </section><!-- /Call To Action Section -->

  </main>

  <?php include "footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>