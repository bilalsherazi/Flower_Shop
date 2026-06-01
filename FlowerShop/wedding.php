<!--WEDDING.PHP-->

<?php
include_once 'CRUD_ops/config.php';
include 'parts\nav.php';
$products=array();
$query = "SELECT * FROM products WHERE Category='1'";
$result = mysqli_query($conn, $query);
$totalrows = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

if(isset($_GET['category']) && $_GET['category'] === 'wedding'){
    ?>
    <div class="container-fluid" id="wedding">
        <h1 class="text-center p-5"><b>WEDDING BOQUETS</b></h1>
        <div class="container">
        <div class="row">

        <?php $counter = 0; // Initialize the counter variable

foreach($products as $product){
    if ($counter % $totalrows === 0 && $counter !== 0) {
        echo '</div><div class="row mt-5">'; // Close the current row and start a new row after displaying three products
    }
    include 'parts/displaycard.php';    
    $counter++; // Increment the counter variable
}?>
</div>
</div>
</div>
<div class="foot mt-3">

<?php
} 

include 'parts/footer.php';?>
</div>