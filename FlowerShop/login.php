<!--LOGIN.PHP-->
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
	<div class="container-fluid" style="background-color:seagreen; height:100vh;">
		<div class="row centered-form d-flex justify-content-center p-5">
			<div class="col-md-6">
				<div class="card shadow">
					<h2 class="card-header text-center">LOGIN</h2>
	 				<div class="card-body bg-basic">    
     					<form name="lgnfrm" method="POST" action="verify.php" class="needs-validation">
							<div class="mb-3">
     							<label class="form-label">Username</label>
     							<input type="text" name="uname" placeholder="Username" class="form-control"><br>
							</div>
							<div class="mb-3">
     							<br><label class="form-label">Password</label>
     							<input type="password" name="pass" placeholder="Password" class="form-control"><br>
							</div>
							<div class="mb-3 d-flex justify-content-end">
     							<br><button type="submit"  name="login" class="btn btn-primary">Login</button>
							</div>
     					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
