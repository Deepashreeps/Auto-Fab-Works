<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/log_cus.jpg);backdrop-filter: blur(6px);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">CUSTOMER REGISTRATION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="controller/reg.php" method="Post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="c_username" placeholder="Username" id="c_username" autocomplete="off" required pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed." required>
		      		</div>
                      <div class="form-group">
		      			<input type="number" class="form-control" name="c_phone" placeholder="Phone Number" id="c_phone" maxlength="10" required pattern="^[789]\d{9}$" title="Phone Number starts with 6, 7, 8 OR 9" pattern="\d{10}" autocomplete="off" required>
		      		</div>
                      <div class="form-group">
		      			<input type="email" class="form-control" name="c_email" placeholder="Email" id="c_email" autocomplete="off" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="c_pass" placeholder="Password" id="c_pass" required>
	              <span toggle="#password-field"></span>
	            </div>
                <div class="form-group">
		      			<input type="text" class="form-control" name="c_address" placeholder="Address" id="c_address" autocomplete="off" required>
		      		</div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">REGISTER</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

