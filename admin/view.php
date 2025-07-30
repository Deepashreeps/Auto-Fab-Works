<?php
include 'config.php';
$admin = new Admin();  //creating admin object to interact with db
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
    <link rel="stylesheet" href="css/custom1.css">
    
</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php include "header.php" ?>
    <div class="main-panel">
        <div class="content-wrapper">
    <div class="section-home our-causes animate-onscroll fadeIn">
        <div class="container">
            <div class="row">
            <h2 class="title-style-1"><center>BLUEPRINTS</center> <span class="title-under"></span></h2>
</br>
</br>
</br>
</br>
                <?php
                $stmt1 = $admin->ret("SELECT * FROM b_photo");
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>  <!--itrates over the each records-->
                    <div class="col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="cause">
                            <img src="../customer/controller/<?php echo $row1['b_img'] ?>" alt="Art Image" class="cause-img">

                            <div class="cause-details">
                                <p><?php echo $row1['sug']; ?></p>
                            </div>
                            <center><h2>Advance Paid</h2></ceNter>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
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