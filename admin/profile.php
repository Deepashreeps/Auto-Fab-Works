<?php
include 'config.php';
$admin=new Admin();
$aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min (2).css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style (2).css" rel="stylesheet">
</head>
  <!-- <style>
    body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
  </style> -->
</head>
<body>
  <!-- <div class="row" id="proBanner">
    <div class="col-12">
    </div>
  </div> -->
  <div class="container-scroller">

<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
    <!-- page-body-wrapper ends -->
    <?php include "header.php" ?>
    
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
    <div class="col-md-3 border-right">
    <?php $i=1;
                    $stmt=$admin->ret("SELECT * FROM `admin`");
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                     ?>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" src="controller/<?php echo $row['a_img']; ?>"><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
            <div class="row mt-2">
                
                <div class="col-md-6"><label class="labels"><?php echo $row['a_name']; ?></label></div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12"><label class="labels"><?php echo $row['a_phone']; ?></label></div>
                <div class="col-md-12"><label class="labels"><?php echo $row['a_email']; ?></label></div>
                <div class="col-md-12"><label class="labels"><?php echo $row['a_password']; ?></label></div>
            </div>
                
               </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>
</div>
</div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include "footer.php" ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

