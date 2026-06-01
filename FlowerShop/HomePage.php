<!--HOMEPAGE.PHP-->
<!DOCTYPE html>
<html lang="en">

<?php
 include 'parts/nav.php';
 include 'CRUD_ops/config.php';
 
 
 $products=array();
$query = "SELECT * FROM products ORDER BY RAND() LIMIT 9";
$result = mysqli_query($conn, $query);
$totalrows = mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}?>


<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 px-0">
                    <div class="col-lg-12 heading pt-6 pl-6">
                        <h1 class="display-4">Welcome to</h1>
                        <h1 class="display-1">Floral Fantasia</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row mt-3">
    <?php
    $counter = 0; // Initialize the counter variable

foreach($products as $product){
    if ($counter % $totalrows === 0 && $counter !== 0) {
        echo '</div><div class="row mt-5">'; // Close the current row and start a new row after displaying three products
    }
    include 'parts/displaycard.php';    
    $counter++; // Increment the counter variable
}?>
    </div>
</div>
    <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
    </div>

    <div id="about" class="container-fluid mt-3 p-5" style="background-color: #FBCCDC;">
        <div class="row">
            <div class="col-sm-8 ">
                <h2>ABOUT FLORAL FANTASIA</h2><br>
                <h4><i>Welcome to Floral Fantasia, your one-stop online flower shop for all your floral needs!</i></h4>
                <br>
                <p>At Floral Fantasia, we believe that flowers have a magical ability to uplift spirits and create
                    lasting memories. Our team of skilled florists meticulously handcrafts each arrangement, ensuring
                    that every bouquet is a work of art.</p>
                <p>With our wide selection of fresh and vibrant blooms, you can find the perfect arrangement for any
                    occasion. Whether you're celebrating a birthday, anniversary, or simply want to brighten someone's
                    day, our exquisite collection has something for everyone.</p>
                <p>We take pride in our commitment to quality and customer satisfaction. From the moment you place your
                    order to the moment it's delivered, we strive to provide a seamless and delightful experience. Our
                    reliable delivery service ensures that your flowers arrive fresh and on time, whether you're sending
                    them to a loved one or treating yourself.</p>
                <p>Experience the joy of flowers with Floral Fantasia. Browse our online shop, and let us help you add a
                    touch of enchantment to your life.</p>
                <br><button class="btn btn-default btn-lg btn-outline-dark link"><a href="#contact" class="text-decoration-none" style=".hover{color:white}">Get in Touch</a></button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo">
                    <img class="rounded-circle shadow" src="logo1.jpeg">
                </span>
            </div>
        </div>
    </div>
    <hr style="background-color:white; height:2px; margin:0%;">
    <div id="myteam" class="team container-fluid p-5" style="background-color: #FBCCDC;">
        <h2>OUR TEAM</h2>
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-pill col-lg-4" src="Arshea_Atif.jpg">
                <h3>Arshea Atif</h3>
                <h5><i>The Creative Petal Mastermind</i></h5>
                <p>With an artistic flair and a passion for floral design, Arshea brings a unique touch to every
                    arrangement. Her keen eye for color combinations and attention to detail make her creations truly
                    captivating.</p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-pill col-lg-4" src="Laiba_Khan.jpg">
                <h3>Laiba Khan</h3>
                <h5><i>Our Blossom Enthusiast </i></h5>
                <p>Laiba's love for flowers is contagious! She is always exploring new varieties and staying up-to-date
                    with the latest floral trends. Her extensive knowledge and enthusiasm ensure that every bouquet is
                    filled with the freshest and most exquisite blooms.</p>
            </div>
            <div class="col-lg-4">
                <img src="Minahil_Noor.jpg" class="rounded-pill  col-lg-4">
                <h3>Minahil Noor</h3>
                <h5><i>The Customer Care Whisperer</i></h5>
                <div class="text-justify">
                    <p class="text-justify">Minahil is the friendly face behind our exceptional customer service. She goes above and beyond to
                    ensure that every customer's experience is seamless and delightful. Her warm and helpful nature
                    makes her a favorite among our valued clients.</p>
                </div>
            </div>
        </div>
    </div>

<?php include 'parts/footer.php';?>

</body>

</html>