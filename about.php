<?php 
session_start();

$_SESSION['cartContent'] = 0;

foreach($_SESSION['cart'] as $cart){
    $_SESSION['cartContent']  += $cart['qty'];
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <title>AZ[Store]</title>
</head>
<body>
    <!-- nav -->
    <nav>
        <a href="./index.php">
            AZ[Store]
        </a>
        <div class="shop__nav">
        <a href="./index.php">
            Home
        </a>
        <a href="./about.php">
            About
        </a>
        <a href="#">
            Products
        </a>
        <a href="#">
            Contact
        </a>
        </div>
        <div class="shop__login">
            <a href="./shopping-cart.php" class="shop__login" id="card"><?php echo (isset($_SESSION['cart'])) ? $_SESSION['cartContent'] : 0;?>
                <img alt="shopping-cart" src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="./checkout.php" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a> 
        </div>
    </nav>

    <!--main (our last products)-->
    <main>
           
    <!--Comments section-->

    <div class="shop__testimonials">
    <div class="testimonials__header">
    <h2>About <span>us</span>.</h2>
    <p class="">
       What would be the world without a good pair of shoes ? You cannot imagine it. You better get ready for the walk of your life.
    </p>
</div>
<div class="testimonials__people">
    <div>
        <img alt="Lysie" src="./assets/images/lysie.webp">
            <b>Lysie  from Be/Code</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <picture>
            <img alt="Corentin" src="./assets/images/corentin.webp"></picture>
            <b>Corentin from Be/Code</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img alt="Laura" src="./assets/images/Laura.webp">
            <b>Laura from Be/Code</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img alt="Nathalie" src="./assets/images/Nathalie.webp">
            <b>Nathalie from Be/Code</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>

</div>
    </div>

    </main>
    
    <!-- footer-->
    <footer>
        <a href="./index.php">
            Home
        </a>
        <a href="./about.php">
            About
        </a>
        <a href="#">
            Products
        </a>
        <a href="#">
            Contact
        </a>
    </footer>
</body>
</html>