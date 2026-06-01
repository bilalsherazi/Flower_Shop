
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h3 class="text-center m-3">Admin Panel</h3>
    <h4 class="m-3">Product List</h4>

    <?php
    
    include 'CRUD_ops/config.php';
    $url = "http://localhost/phpmyadmin/index.php?route=/sql&db=floralfantasia&table=products&pos=0";

?>
<div class="container d-flex justify-content-end mb-3">
    <button class="btn btn-primary" type="submit">
        <a href="http://localhost/FlowerShop/CRUD_ops/add.php" class="text-decoration-none" style="color:white">Add Product</a></button>
</div>

<table class = "table table-striped"> 
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Image</th>
    <th style = "color: red;">Action</th>
</tr>
<?php 
 $sql = "Select * from products;";
 $table = mysqli_query($conn,$sql);
if(mysqli_num_rows($table)>0){
    while ($row = mysqli_fetch_assoc($table)) { 

        echo "
            <tr>
                <td> $row[ID]</td>
                <td> $row[Name]</td>
                <td> $row[Category]</td>
                <td> $row[Price]</td>
                <td> $row[Image]</td>

                <td>
                   <button class='btn btn-primary'><a href='http://localhost/FlowerShop/CRUD_ops/view.php?ID= $row[ID]' style='color:white'> View </a></button>
                   <button class='btn btn-success'><a href='http://localhost/FlowerShop/CRUD_ops/edit.php?ID= $row[ID]' style='color:white'> Edit </a></button>
                   <button class='btn btn-danger'><a href='http://localhost/FlowerShop/CRUD_ops/del.php?ID= $row[ID]' style='color:white'>  Del </a></button>
                </td>
            </tr>
        ";         
    }
} else {
echo "0 results";
}

mysqli_close($conn);
?>

</table>
</body>
</html>