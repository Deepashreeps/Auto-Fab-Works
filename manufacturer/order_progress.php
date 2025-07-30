<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Order Progress - AutoFab Works</title>
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

<body class="services-page">

  <?php include "header.php" ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/head1.webp);">
      <div class="container position-relative">
        <h1>ORDER PROGRESS</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container-fluid pt-4 px-4">
                <div class="form-header">
            <form method="post" action="controller/order.php" enctype="multipart/form-data">
							<div class="row"></br>

								<div class="col-md-6">
									<div class="form-group">
                  <label for="name">Customer Name</label>
                  <input type="text" name="c_name" class="form-control" id="c_name" placeholder="Name" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." Required>
                  <br></br>
                  <label>Progress of the Machine</label><br></br>
                                    <input type="radio" id="opt1" name="prog" value="Pending">
                                    <label for="opt1">Pending</label><br><br>
                                    <input type="radio" id="opt2" name="prog" value="Manufacturing">
                                    <label for="opt2">Manufacturing</label><br><br>
                                    <input type="radio" id="opt3" name="prog" value="In Design">
                                    <label for="opt3">In Design</label><br><br>
                                    <input type="radio" id="opt3" name="prog" value="Quality Check">
                                    <label for="opt3">Quality Check</label><br><br>
                                    <input type="radio" id="opt3" name="prog" value="Ready for Delivery">
                                    <label for="opt3">Ready for Delivery</label><br><br>
									</div>
                </div>
							</div></br>
							<button type="submit" name="add" class="btn btn-primary">SUBMIT</button>
						</form>
            <script>
                        function toggleInput() {
                        document.getElementById("otherInput").disabled = !document.getElementById("otherRadio").checked;
                        }
                        </script>
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