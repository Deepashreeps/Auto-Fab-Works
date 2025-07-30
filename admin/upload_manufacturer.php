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

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="form-header">
				    <h2>Uploading blueprint of the mechanical parts</h2>
</br>
                        <form method="post" action="controller/m_photo.php" enctype="multipart/form-data">
							<div class="row"></br>
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="img">Upload blueprint</label>
                                            <input type="file" name="img" class="form-control" id="img" onchange="validateFileSize()" placeholder="Upload Image" Required>
                                            </br></br>
                                            <label for="img">This Machine is assigned to,</label>
                                            <input type="text" name="assign" class="form-control" id="assign" placeholder="Employee name" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." Required>
									</div>
                                </div>
							</div></br>
							<button type="submit" name="add" class="btn btn-primary">UPLOAD</button>
						</form>
                        
                        <script>
                        function validateFileSize() {
                        const fileInput = document.getElementById('img');
                        const file = fileInput.files[0];

                            if (file && file.size > 1 * 1024 * 1024) { // 1MB = 1 * 1024 * 1024 bytes
                                alert("File size must be less than 1MB!");
                                fileInput.value = ""; // Clear the selection
                            }
                        }
                        </script>
                       
			    </div>
            </div>
            <!-- Widgets End -->
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>

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