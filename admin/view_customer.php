<?php
include 'config.php';
$admin=new Admin();
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

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        
        <?php include "header.php" ?>

        <div class="main-panel">
        <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Customer Details</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-striped</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                          Customer ID
                          </th>
                          <th>
                          Customer Name
                          </th>
                          <th>
                           Phone Number
                          </th>
                          <th>
                          Customer Email
                          </th>
                          <th>
                          Address
                          </th>
                          <!-- <th>
                          Profile
                          </th> -->
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $i=1;
                        $stmt=$admin->ret("SELECT * FROM `customer` ");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                        <tr>
                          <td class="py-1">
                        <?php echo $row['c_id'] ?>
                          </td>
                          <td class="py-1">
                        <?php echo $row['c_username'] ?>
                          </td>
                          <td>
                          <?php echo $row['c_phone'] ?>
                          </td>
                          <td>
                          <?php echo $row['c_email'] ?>
                          </td>
                          <td>
                          <?php echo $row['c_address'] ?>
                          </td>
                          <!-- <td>
                         <img height="150px" src="../customer/controller/<?php echo $row['c_img'] ?>">
                          </td> -->
                        </tr>
                        <?php } ?>
                         </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


            <?php include "footer.php" ?>
           
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main (2).js"></script>
</body>

</html>