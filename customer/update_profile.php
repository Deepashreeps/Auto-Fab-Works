<?php
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profile - AutoFab WorkS</title>
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

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

<?php include "header.php" ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/header1.webp);">
      <div class="container position-relative">
        <h1>PROFILE</h1>
      </div>
    </div><!-- End Page Title -->

    <form method="post" action="controller/update_backend.php" enctype="multipart/form-data">   
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile </h4>
                </div> -->
                <div class="row mt-2">
                <?php $i=1;
                    $stmt=$admin->ret("SELECT * FROM `customer` where c_id ='$cid'");
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                     ?>
                    <div class="col-md-6"><label class="labels">Customer name</label><input type="text" name="c_username" class="form-control" placeholder="Customer name" value="<?php echo $row['c_username']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone number</label><input type="number" name="c_phone" class="form-control" placeholder="Customer Phone number" value="<?php echo $row['c_phone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Customer Email</label><input type="email" name="c_email" class="form-control" value="<?php echo $row['c_email']; ?>" placeholder="Customer Email"></div>
                    <div class="col-md-12"><label class="labels">Customer Password</label><input type="password" name="c_pass" class="form-control" value="<?php echo $row['c_pass']; ?>" placeholder="Customer Password"></div>
                    <div class="col-md-12"><label class="labels">Customer address</label><input type="text" name="c_address" class="form-control" placeholder="Customer Address" value="<?php echo $row['c_address']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Customer Image</label><input type="file" name="c_img" class="form-control" placeholder="Customer Image" ><img src="controller/<?php echo $row['c_img']; ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"  name="update">Update</button></div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</form>
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