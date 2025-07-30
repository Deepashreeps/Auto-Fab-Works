<?php include 'config.php'; 
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Upload design - AutoFab Works</title>
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

<body class="services-page">

<?php include "header.php" ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/header1.webp);">
      <div class="container position-relative">
        <h1>UPLOAD</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <div class="container-fluid pt-4 px-4">
      <div class="form-header">
		    <!-- <h2>Uploading blueprint of the machine</h2> -->
            <form method="post" action="controller/b_photo.php" enctype="multipart/form-data">
							<div class="row"></br>
							<div class="col-md-6">
								<div class="form-group">
                </br></br>
                  <label for="img">Upload blueprint</label>
                  <input type="file" name="b_img" class="form-control" id="img" onchange="validateFileSize()" placeholder="Upload Image" Required>
                </br>
                </br>
                  <label for="name">Description</label>
                  <input type="text" name="sug" class="form-control" id="sug" placeholder="description" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." Required>
								</div>
              </div>
						</div></br></br>
            <!-- <form id="uploadForm" action="controller/payment_backend.php" method="post" enctype="multipart/form-data"> -->
              <div class="btn-holder text-center">
        <!-- Payment Button -->
                <!-- Payment Button -->
                <button type="button" class="btn btn-primary" onclick="showAdvancePaymentForm()">PAYMENT</button>


        <!-- Hidden Field to Track Payment Status -->
                <input type="hidden" id="paymentStatus" name="paymentStatus" value="0">

        <!-- Upload Button (Initially Disabled) -->
        <button type="submit" name="add" class="btn btn-primary" id="uploadBtn"
  <?php if (!isset($_SESSION['payment_done']) || $_SESSION['payment_done'] !== true) echo 'disabled'; ?>>
  UPLOAD
</button>
  </div>
        <!-- </form> -->
  
<script>
  function showAdvancePaymentForm() {
    document.getElementById("advancePaymentForm").style.display = "block";
  }
  function validateFileSize() {
    const fileInput = document.getElementById('img');
    const file = fileInput.files[0];

    if (file && file.size > 1 * 1024 * 1024) { // 1MB = 1 * 1024 * 1024 bytes
      alert("File size must be less than 1MB!");
      fileInput.value = ""; // Clear the selection
    }
  }
</script>


<style>
  #paymentForm {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 10px;
    background-color: #f8f9fa;
  }
</style>

</form>

</br>
</br>
                        <script>
                        function toggleInput() {
                        document.getElementById("otherInput").disabled = !document.getElementById("otherRadio").checked;
                        }
                        </script>
			    </div>
            </div>
  </main>

        <!-- Advance Payment Form (Initially Hidden) -->
  <div id="advancePaymentForm" style="display: none; max-width: 500px; margin: 30px auto; padding: 25px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
  <h3 class="text-center mb-4">Make a Advance Payment</h3>
    <form id="advancePaymentForm" action="controller/payment_backend.php" method="post">
  <div class="form-group mb-3">
    <label>Customer Name</label>
    <input type="text" class="form-control" id="customerName" name="c_name" placeholder="Enter Customer Name">
  </div>
  
  <div class="form-group mb-3">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="c_email" placeholder="Enter Customer Email ID">
  </div>
  
  <div class="form-group mb-3">
    <label>Phone Number</label>
    <input type="tel" class="form-control" id="phone" name="c_phone" placeholder="Enter Phone Number">
  </div>
  
  <div class="form-group mb-3">
    <label>Amount (₹)</label>
    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
  </div>
  
  <div class="form-group mb-4">
    <label>Card Number</label>
    <input type="text" class="form-control" id="card" name="cardNumber" placeholder="**** **** **** ****">
  </div>
  
  <button type="submit" class="btn btn-success w-100" name="pay">Pay Now</button>
  </form>
</div>

  

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