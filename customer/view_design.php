<?php
include 'config.php';
$admin = new Admin();  // Creating admin object to interact with DB
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>View Design - AutoFab Works</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Marcellus&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="testimonials-page">

  <?php include "header.php" ?>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/header1.webp);">
      <div class="container position-relative">
        <h1>View Complete Design</h1>
      </div>
    </div>

    <!-- Design Files List -->
    <section class="section" id="testimonials">
      <div class="container">
        <div class="row">
          <?php
          $stmt1 = $admin->ret("SELECT * FROM photo");
          while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
            $file = $row1['p_img'];
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $is3D = in_array($ext, ['stl', 'glb','gltf','bin','step']);

            if ($is3D) {
          ?>
              <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                <div class="card shadow-sm p-3 text-center" style="width: 100%; max-width: 300px;">
                  <div class="card-body">
                    <p class="fw-bold mb-3"><?php echo basename($file); ?></p>
                    <p><?php echo $row1['p_name']; ?></p>
                    <a href="view_3d.php?file=<?php echo urlencode($file); ?>" class="btn btn-primary">View in 3D</a>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section>
  </main>

  <?php include "footer.php" ?>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>