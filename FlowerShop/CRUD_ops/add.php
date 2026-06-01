<?php include('config.php');
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

    <title>Add Page</title>
</head>
    <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "floralfantasia";
$url = "http://localhost/phpmyadmin/index.php?route=/sql&db=floralfantasia&table=products&pos=0";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST["pname"];
    $category = $_POST["cat"];
    $price = $_POST["price"];
    $img = $_POST["img"];


    // Insert data into the database
    $sql = "INSERT INTO products (Name, Category, Price, Image) VALUES ('$product_name', '$category', '$price', '$img')";

    if ($conn->query($sql) === TRUE) {
       ?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Product added Successfully!</strong>
</div>       <?php

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<body>
    <div style="background-color:teal;" class="container-fluid">
    <div class="container">
        <button class="btn btn-primary m-3" type="submit"><a href="http://localhost/FlowerShop/AdminPanel.php" class="text-decoration-none" style="color:white">Go Back</a></button>
    </div>
        <div class="row centered-form d-flex justify-content-center p-5">
            <div class="col-md-6">
				<div class="card shadow">
					<h2 class="card-header text-center">Add Product</h2>
	 				<div class="card-body bg-basic">    
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Product Name:</label>
                                <input type="text" class="form-control" id="product_name" name="pname" required>
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Price:</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                            </div>
                            <div class="mb-3"> 
                                <label for="Category" class="form-label">Category:</label>
                                <input id="cat" class="form-control" name="cat" required></input>
                            </div>
                            <div class="mb-3"> 
                                <label for="Image" class="form-label">Image:</label>
                                <input id="img" class="form-control" name="img" required></input>
                            </div>
                            <div>
                                <button class="btn btn-primary form-control shadow" type="submit">Add</button>
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
