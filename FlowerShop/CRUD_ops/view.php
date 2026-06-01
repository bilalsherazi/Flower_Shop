<!--VIEW.PHP-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>
<?php
include_once "config.php";

$url = "http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=floralfantasia&table=products";
?>
<div class="container">
        <h3 class="text-center m-3">Product Details</h3>

        <?php
       
        // Check if a product ID is provided in the URL
        if (isset($_GET['ID'])) {
            $product_id = $_GET['ID'];

            // Fetch product details from the database
            $query = "SELECT * FROM products WHERE ID = $product_id";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="container-fluid mt-5">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <td><?php echo $row['ID']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['Name']; ?></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><?php echo $row['Category']; ?></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><?php echo $row['Price']; ?></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><?php echo $row['Image']; ?></td>
                    </tr>
                </table>
            </div>
                <?php
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Invalid product ID.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>


</body>
</html>