<!--DISPLAY PRODUCTS-->
<?php
include 'CRUD_ops/config.php';
?>

<div class="col-sm-4">
<div class="card p-5 m-3" style="width:100%; height:auto">
    <img class="product-img img-rounded" src="<?php echo $product['Image'];?>">
    <h3 class="product-name"><?php echo $product['Name'];?></h3>
    <p class="product-price">Price: PKR <?php echo $product['Price'];?></p>
    <ion-icon name="cart" class="add-cart"></ion-icon>
</div>
</div>