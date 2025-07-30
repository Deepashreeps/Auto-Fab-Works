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
    <style>
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
  </style>
</head>
<body>
  
  <div class="container-scroller">
<?php include "header.php" ?>
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
    <!-- page-body-wrapper ends -->

<form method="post" action="controller/update_profile_backend.php" enctype="multipart/form-data">   
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile </h4>
                </div>
                <div class="row mt-2">
                <?php $i=1;
                    $stmt=$admin->ret("SELECT * FROM `admin` where a_id ='$aid'");
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                     ?>
                    <div class="col-md-6"><label class="labels">Admin name</label><input type="text" name="a_name" class="form-control" placeholder="Admin name" value="<?php echo $row['a_name']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone number</label><input type="text" name="a_phone" class="form-control" placeholder="Admin Phone number" value="<?php echo $row['a_phone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Admin Email</label><input type="email" name="a_email" class="form-control" value="<?php echo $row['a_email']; ?>" placeholder="Admin Email"></div>
                    <div class="col-md-12"><label class="labels">Admin Image</label><input type="file" name="a_img" class="form-control" placeholder="Admin Image" ><img src="controller/<?php echo $row['a_img']; ?>"></div>
                </div>
                <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" name="update">Update</button></div> -->
                 <button class="btn btn-primary profile-button" type="submit" name="update">Update</button>
            </div>
            <?php }?>
        </div>
    </div>
</div>
</form>
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
  <!-- End custom js for this page-->
</body>

</html>

