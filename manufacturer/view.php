<?php
include 'config.php';
$admin = new Admin();  //creating admin object to interact with db
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>View blueprint - AutoFab Works</title>
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
  <link rel="stylesheet" href="css/custom.css">

</head>

<body class="contact-page">

<?php include "header.php" ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/head1.webp);">
      <div class="container position-relative">
        <h1>View Blueprints</h1>
      </div>
    </div><!-- End Page Title -->
</br>
</br>
</br>
    <!-- Contact Section -->
    <div class="container">
            <div class="row">
                <?php
                $stmt1 = $admin->ret("SELECT * FROM m_pic");
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>  <!--itrates over the each records-->
                    <div class="col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="cause">
                            <img src="../admin/controller/<?php echo $row1['m_img'] ?>" alt="Art Image" class="cause-img">

                            <div class="cause-details">
                                <p><b>This Mechanical part is Assigned to,</b>
                                  <?php echo $row1['assign']; ?> and Team</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div><!-- /Call To Action Section -->

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