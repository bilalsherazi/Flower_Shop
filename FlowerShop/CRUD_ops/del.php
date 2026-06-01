<!--DELETE.PHP-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include_once 'config.php';

// Check if a product ID is provided in the URL
if (isset($_GET['ID'])) {
    $product_id = $_GET['ID'];

    // Check if the product exists in the database
    $query = "SELECT * FROM products WHERE ID = $product_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Delete the product from the database
        $deleteQuery = "DELETE FROM products WHERE ID = $product_id";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if ($deleteResult) {?>
            <div class="container">
                <h3 class="text-center m-3">Product deleted successfully.</h3></br>
                <div class="container d-flex justify-content-center">
                    <button class="btn btn-primary m-3" type="submit">
                        <a href="http://localhost/FlowerShop/AdminPanel.php" class="text-decoration-none" style="color:white">Go Back</a>
                    </button>
                </div>
            </div>
            <?php

        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid product ID.";
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>