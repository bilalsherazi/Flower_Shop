<!-- Edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Page</title>
</head>
<?php
include_once "config.php";

$url = "http://localhost/phpmyadmin/index.php?route=/sql&db=floralfantasia&table=products&pos=0"; 
$row = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get input values
    $id=$_GET['ID'];
    $product_name = $_POST['pname'];
    $price = $_POST['price'];
    $cat = $_POST['cat'];
    $img = $_POST['img'];


    // Update the product
    $sqlUpdate = "UPDATE products SET Name = '$product_name', Price = '$price', Category = '$cat', Image = '$img' WHERE ID = '$id';";
    
    // Execute the query
    $result = mysqli_query($conn, $sqlUpdate);

    if ($result && mysqli_affected_rows($conn) > 0) {
        // Rows were affected, update successful
        header("Location: AdminPanel.php");
        exit();
    } else {
        // No rows affected, update failed
        $error = "Error updating the product: " . mysqli_error($conn);
        // Handle the error appropriately
    }
}
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $update = true;
    $result = mysqli_query($conn, "SELECT * FROM products WHERE ID=$id");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id=$row['ID'];
        $product_name = $row['Name'];
        $price =$row['Price'];
        $cat = $row['Category'];
        $img = $row['Image'];
    }else {
        $error = "Product not found.";
    }
} else {
    $error = "Product ID not provided.";
} ?>
<body>
        <div class="container">
        <div class="row centered-form d-flex justify-content-center p-5">
            <div class="col-md-6">
				<div class="card shadow">
					<h2 class="card-header text-center">Edit Product</h2> 
	 				<div class="card-body bg-basic">    
                        <form method="POST" action="http://localhost/FlowerShop/AdminPanel.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Product Name:</label>
                                <input type="text" class="form-control" name="pname" value="<?php echo $row['Name'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Price:</label>
                                <input type="number" class="form-control" name="price" step="0.01" value="<?php echo $row['Price'];?>">
                            </div>
                            <div class="mb-3"> 
                                <label for="Category" class="form-label">Category:</label>
                                <input class="form-control" name="cat" value="<?php echo $row['Category'];?>">
                            </div>
                            <div class="mb-3"> 
                                <label for="Image" class="form-label">Image:</label>
                                <input class="form-control" name="img" value="<?php echo $row['Image'];?>">
                            </div>
                            <div>
                                <button class="btn btn-primary form-control shadow" type="submit" name="update">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php // Close the database connection
        mysqli_close($conn);
        ?>
</body>
</html>