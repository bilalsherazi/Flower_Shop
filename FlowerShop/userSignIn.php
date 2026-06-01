<?php include('CRUD_ops/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Create Account</title>
</head>
    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phn"];
    $pass = $_POST["pwd"];


    // Insert data into the database
    $sql = "INSERT INTO users (Name, Username, Email, Phone, Password) VALUES ('$name', '$uname', '$email', '$phone', '$pass')";

    if ($conn->query($sql) === TRUE) {
       ?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>You have Signed Up Successfully!</strong>
</div>       <?php

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<body>
    <div style="background-color:violet;" class="container-fluid">
        <div class="row centered-form d-flex justify-content-center p-5">
            <div class="col-md-6">
				<div class="card shadow">
					<h2 class="card-header text-center">Sign Up</h2>
	 				<div class="card-body bg-basic">    
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="user_name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" required>
                            </div>
                            <div class="input-group mb-3">
                                <label for="Email" class="form-label"></label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                                <span class="input-group-text">@example.com</span>
                            </div>
                            <div class="mb-3"> 
                                <label for="Phone" class="form-label">Phone</label>
                                <input id="phn" class="form-control" name="phn" required></input>
                            </div>
                            <div class="mb-3"> 
                                <label for="Password" class="form-label">Password</label>
                                <input id="pwd" class="form-control" name="pwd" required></input>
                            </div>
                            <div>
                                <button class="btn btn-primary form-control shadow" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
