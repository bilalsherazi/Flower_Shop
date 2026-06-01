<!--LOGIN.PHP-->
<?php include 'CRUD_ops/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Login Page</title>
</head>
<body>
	<div class="container-fluid p-5" style="background-color:pink;">
    <div class="container d-flex justify-content-end">
    <button type="submit" name="signin" class="btn btn-primary"><a href="http://localhost/FlowerShop/userSignIn.php" class="text-decoration-none" style="color:white">SignIn</a>
    </button>
    </div>
    <h3 class="text-center">Already have an Account? Login from Below!</h3>
		<div class="row centered-form d-flex justify-content-center p-5">
			<div class="col-md-6">
				<div class="card shadow">
					<h2 class="card-header text-center">LOGIN</h2>
	 				<div class="card-body bg-basic">    
     					<form name="ulgnfrm" method="POST" action="userverify.php" class="needs-validation">
							<div class="mb-3">
     							<label class="form-label">Username</label>
     							<input type="text" name="uname" placeholder="Username" class="form-control"><br>
							</div>
							<div class="mb-3">
     							<br><label class="form-label">Password</label>
     							<input type="password" name="pass" placeholder="Password" class="form-control"><br>
							</div>
							<div class="mb-3 d-flex justify-content-end">
     							<br><button type="submit"  name="ulogin" class="btn btn-primary">Login</button>
							</div>
     					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
